<?php

namespace App\Http\Controllers\Admin\Newslater;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class NewslaterController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function Newslater()
    {
        $newslater=DB::table('newslaters')->get();
        return view('admin.newslater.newslater',compact('newslater'));
    }

    public function DeleteNewslater($id){
        DB::table('newslaters')->where('id',$id)->delete();
        $notification = array(
            'message'=>'Newslater Successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);
    }

}
