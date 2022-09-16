<?php

namespace App\Http\Controllers\Admin\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ReturnOrderController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public  function request()
    {
    	 $order=DB::table('orders')->where('return_order',1)->get();
    	 return view('admin.return.request',compact('order'));
    }

    public function ApproveReturn($id)
    {
        // New Code Add for Stock Management at Tutorial 55
        $product=DB::table('order_details')->where('order_id',$id)->get();
        foreach ($product as $row) {
            DB::table('products')
              ->where('id',$row->product_id)
              ->update(['product_quantity' => DB::raw('product_quantity +'.$row->quantity)]);
        }


        // OLD Code 
    	DB::table('orders')->where('id',$id)->update(['return_order'=>2]);
        $notification=array(
            'message'=>'Return Successfully Done',
            'alert-type'=>'success'
            );
        return Redirect()->back()->with($notification);
    }

    public function AllApproveReturn()
    {
    	 $order=DB::table('orders')->where('return_order',2)->get();
    	 return view('admin.return.all_approve_return',compact('order'));
    }

    public function Stock()
    {
        $product=DB::table('products')
                     ->join('categories','products.category_id','categories.id')
                     ->join('brands','products.brand_id','brands.id')
                     ->select('products.*','categories.category_name','brands.brand_name')
                     ->get();
        return view('admin.stock.stock',compact('product'));

    }
    



}
