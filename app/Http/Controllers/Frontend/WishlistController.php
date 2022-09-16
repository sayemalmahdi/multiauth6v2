<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class WishlistController extends Controller
{
    public function AddWishlist($id){
    	$userid = Auth::id();
    	$check = DB::table('wishlists')
    			->where('user_id',$userid)
    			->where('product_id',$id)
    			->first();

    	$data=array(
    		'user_id' => $userid,
    		'product_id' => $id
    	);

        if (Auth::check()) {
        	if ($check) {
        		// $notification = array(
        		// 	'message'=>'Already has your wishlist',
        		// 	'alert-type'=>'error'
        		// );
        		// return redirect()->back()->with($notification);
                return response()->json(['error'=>'Already has your on wishlist']);
        	}else{
        		DB::table('wishlists')->insert($data);
        		// $notification = array(
        		// 	'message'=>'Add to Wishlist',
        		// 	'alert-type'=>'success'
        		// );
        		// return redirect()->back()->with($notification);
                return response()->json(['success'=>'Add to Wishlist']);
        	}
        }else{
        	// $notification = array(
        	// 		'message'=>'At first login your account',
        	// 		'alert-type'=>'error'
        	// 	);
        	// 	return redirect()->back()->with($notification);
            return response()->json(['error'=>'At first login your account']);
        }
    }

    public function AllWishlist()
    {
        $userid=Auth::id();
        $product=DB::table('wishlists')->join('products','wishlists.product_id','products.id')
                          ->select('products.*','wishlists.user_id')
                          ->where('wishlists.user_id',$userid)
                          ->orderBy('wishlists.id','DESC')
                          ->limit(24)
                          ->get();

        // $color=$product->product_color;
        // $product_color = explode(',', $color);

        // $size=$product->product_size;
        // $product_size = explode(',', $size);

        // return response()->json($product);
        





        //original return
        // return view('frontend.pages.wishlist',compact('product','product_color','product_size'));

        //new return             
        return view('frontend.pages.wishlist',compact('product'));             
    }

    public function removeWishlistitem($id)
    {
        DB::table('wishlists')->where('wishlists.product_id',$id)->delete();   
        return redirect()->back();
    }




}
