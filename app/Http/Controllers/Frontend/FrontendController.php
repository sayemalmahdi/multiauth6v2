<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class FrontendController extends Controller
{
    public function index(){
   	 	return view('frontEnd.home.homeContent');
	}

	public function StoreNewslater(Request $request){
        $validatedData = $request->validate([
	        'email' => 'required|unique:newslaters|max:55',
        ]);

        $data=array();
        $data['email']=$request->email;
        DB::table('newslaters')->insert($data);  
            $notification=array(
                'message'=>'Thanks for Subscribing',
                'alert-type'=>'success'
            );
        return redirect()->back()->with($notification);
    }

    public function OrderTracking(Request $request)
    {
         $code=$request->code;


         $track=DB::table('orders')->where('status_code',$code)->first();
         if ($track) {             
             return view('frontend.pages.track',compact('track'));
         }else{
               $notification=array(
                'message'=>'Invalid Status Code ',
                'alert-type'=>'error'
                       );
             return Redirect()->back()->with($notification);
         }

    }

    public function ProductSearch(Request $request)
    {
        $brands=DB::table('brands')->get();
        $item=$request->search;
        $products=DB::table('products')
            ->join('brands','products.brand_id','brands.id')
            ->select('products.*','brands.brand_name')
            ->where('product_name','LIKE', "%{$item}%")
            ->orWhere('brand_name','LIKE', "%{$item}%")
            ->paginate(20);
        return view('frontend.pages.search',compact('brands','products'));       
    }


}
