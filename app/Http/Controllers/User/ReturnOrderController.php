<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class ReturnOrderController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function SuccessList(){
    	$order=DB::table('orders')
    		  ->where('user_id',Auth::id())
    		  ->where('status',3)
    		  ->orderBy('id','DESC')
    		  ->limit(20)
    		  ->get();
    	return view('user.return_order',compact('order'));
    }

    public function RequestReturn($id)
    {
        DB::table('orders')->where('id',$id)->update(['return_order'=>1]);
        $notification=array(
            'message'=>'Order Return Request Done.Please wait for our confirmation email',
            'alert-type'=>'success'
            );
        return Redirect()->back()->with($notification);
    }



}
