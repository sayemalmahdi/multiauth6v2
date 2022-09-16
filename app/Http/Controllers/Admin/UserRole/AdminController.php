<?php

namespace App\Http\Controllers\Admin\UserRole;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function CreateAdmin(){
    	return view('admin.userRole.create_admin');
    }

    public function StoreAdmin(Request $request)
    {
    	 $data=array();
    	 $data['role_id']=1;
    	 $data['name']=$request->name;
    	 $data['username']=$request->username;
    	 $data['phone']=$request->phone;
    	 $data['email']=$request->email;
    	 $data['password']= Hash::make($request->password);
    	 $data['category']=$request->category;
    	 $data['blog']=$request->blog;
    	 $data['report']=$request->report;
    	 $data['contact']=$request->contact;
    	 $data['coupon']=$request->coupon;
    	 $data['orders']=$request->orders;
    	 $data['user_role']=$request->user_role;
    	 $data['comment']=$request->comment;
    	 $data['product']=$request->product;
    	 $data['other']=$request->other;
    	 $data['returns']=$request->returns;
    	 $data['setting']=$request->setting;
         $data['site_setting']=$request->site_setting;
         $data['stock']=$request->stock;
         $data['type']=2;
    	 DB::table('users')->insert($data);
    	 $notification=array(
                 'message'=>'Child Admin Create Successfully',
                 'alert-type'=>'success'
                       );
        return Redirect()->back()->with($notification);
    }

    public function AllChildAdmin()
    {
         $user=DB::table('users')->where('type',2)->get();
         return view('admin.userRole.all_child_admin',compact('user'));
    }

    public function DeleteChildAdmin($id)
    {
         DB::table('users')->where('id',$id)->delete();
         $notification=array(
                 'message'=>'Child Admin Delete Successfully',
                 'alert-type'=>'success'
                       );
         return Redirect()->back()->with($notification);
    }

    public function EditChildAdmin($id)
    {
         $user=DB::table('users')->where('id',$id)->first();
         return view('admin.userRole.edit_child_admin',compact('user'));
    }

    public function UpdateChildAdmin(Request $request)
    {
         $id=$request->id;
         $data=array();
         $data['name']=$request->name;
         $data['username']=$request->username;
         $data['phone']=$request->phone;
         $data['email']=$request->email;
         $data['category']=$request->category;
         $data['blog']=$request->blog;
         $data['report']=$request->report;
         $data['contact']=$request->contact;
         $data['coupon']=$request->coupon;
         $data['orders']=$request->orders;
         $data['user_role']=$request->user_role;
         $data['comment']=$request->comment;
         $data['product']=$request->product;
         $data['other']=$request->other;
         $data['returns']=$request->returns;
         $data['setting']=$request->setting;
         $data['site_setting']=$request->site_setting;
         $data['stock']=$request->stock;
         DB::table('users')->where('id',$id)->update($data);
         $notification=array(
                 'message'=>'Child Admin Update Successfully',
                 'alert-type'=>'success'
                       );
        return Redirect()->route('admin.all.child.admin')->with($notification);


    }


}
