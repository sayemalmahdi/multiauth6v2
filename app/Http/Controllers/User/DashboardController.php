<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;
use Image;

class DashboardController extends Controller
{
    // public function index(){
    // 	return view('user.dashboard');
    // }

    public function index(){
    	return view('user.profile');
    }

    public function changePassword(){
        return view('user.changepassword');
    }

    public function updatePassword(Request $request)
    {
      $password=Auth::user()->password;
      $oldpass=$request->oldpass;
      $newpass=$request->password;
      $confirm=$request->password_confirmation;
      if (Hash::check($oldpass,$password)) {
           if ($newpass === $confirm) {
                      $user=User::find(Auth::id());
                      $user->password=Hash::make($request->password);
                      $user->save();
                      Auth::logout();  
                      $notification=array(
                        'message'=>'Password Changed Successfully ! Now Login with Your New Password',
                        'alert-type'=>'success'
                         );
                       return Redirect()->route('login')->with($notification); 
                 }else{
                     $notification=array(
                        'message'=>'New password and Confirm Password not matched!',
                        'alert-type'=>'error'
                         );
                       return Redirect()->back()->with($notification);
              }     
      }else{
        $notification=array(
                'message'=>'Old Password not matched!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification); 
      }

    }

    public function Logout()
    {
        // $logout= Auth::logout();
            Auth::logout();
            $notification=array(
                'message'=>'Successfully User Logout',
                'alert-type'=>'success'
                 );
             return Redirect()->route('login')->with($notification);    
    }

    public function editProfilePic($id){
        $user=DB::table('users')->where('id',$id)->first();
        return view('user.edit_profile_pic',compact('user'));
    }

    
        public function updateProfilePic(Request $request,$id)
    {
        // $validatedData = $request->validate([
        // 'username' => 'required|unique:users|max:75',
        // 'name' => 'required',
        // 'phone' => 'required',
        // ]);

        
        $old_image=$request->old_image;
        
        $image=$request->image;
        $data=array();
        $data['name']=$request->name;
        $data['username']=$request->username;
        $data['phone']=$request->phone;
        
                   
        
        // Image One Done
        if ($request->has('image') && $request->has('old_image')) {
          if ($old_image) {
            unlink($old_image);
             $image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('public/media/profile/'.$image_one_name);
                $data['image']='public/media/profile/'.$image_one_name;
                DB::table('users')->where('id',$id)->update($data);
            $notification=array(
                     'message'=>'Profile Updated ',
                     'alert-type'=>'success'
                    );
             return Redirect()->route('user.profile')->with($notification);
           }else{
            
                $image_one_name= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('public/media/profile/'.$image_one_name);
                $data['image']='public/media/profile/'.$image_one_name;
                DB::table('users')->where('id',$id)->update($data);
            $notification=array(
                     'message'=>'Profile Updated ',
                     'alert-type'=>'success'
                    );
             return Redirect()->route('user.profile')->with($notification);
           }           
        }else{
               // $data['post_image']=$oldimage;
               DB::table('users')->where('id',$id)->update($data);
               $notification=array(
                     'message'=>'Update Without Image',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('user.profile')->with($notification);  
        }
         
    }

    public function ViewOrder($id)
    {
      $order=DB::table('orders')
          ->join('users','orders.user_id','users.id')
          ->select('users.name','users.phone','orders.*')
          ->where('orders.id',$id)
          ->first();

      $shipping=DB::table('shipping')
           ->where('order_id',$id)
           ->first();

      $details=DB::table('order_details')
          ->join('products','order_details.product_id','products.id')
          ->select('products.product_code','products.image_one','order_details.*')
          ->where('order_details.order_id',$id)
          ->get();
                
        // dd($details);
        return view('user.view_order',compact('order','shipping','details')); 
    }
    

   




}
