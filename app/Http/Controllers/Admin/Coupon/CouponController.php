<?php

namespace App\Http\Controllers\Admin\Coupon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CouponController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function Coupon()
    {
        $coupon=DB::table('coupons')->get();
        return view('admin.coupon.coupon',compact('coupon'));
    }

    public function StoreCoupon(Request $request){
    	$validatedData = $request->validate([
            'coupon' => 'required',
            'discount' => 'required',
        ]);

        $data=array();
        $data['coupon']=$request->coupon;
        $data['discount']=$request->discount;
        DB::table('coupons')->insert($data);

    	$notification=array(
    		'message'=>'Coupon Inserted Succesfully',
    		'alert-type'=>'success'
    	);
    	return redirect()->back()->with($notification);
    }

    public function DeleteCoupon($id){
        DB::table('coupons')->where('id',$id)->delete();
        $notification = array(
            'message'=>'Coupons Successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);
    }

    public function EditCoupon($id){
        $coupon = DB::table('coupons')->where('id',$id)->first();
        return view('admin.coupon.edit_coupon',compact('coupon'));
    }

    public function UpdateCoupon(Request $request,$id){
        $validatedData = $request->validate([
            'coupon' => 'required',
            'discount' => 'required',
        ]);

        $data=array();
        $data['coupon']=$request->coupon;
        $data['discount']=$request->discount;
        $update=DB::table('coupons')->where('id',$id)->update($data);

        if ($update) {
            $notification = array(
            'message'=>'Coupon Successfully Updated',
            'alert-type'=>'success'
        );
            return redirect()->route('admin.coupon')->with($notification);
        }else{
            $notification = array(
            'message'=>'Nothing to Updated',
            'alert-type'=>'error'
        );
            return redirect()->route('admin.coupon')->with($notification);
        }
    }


}
