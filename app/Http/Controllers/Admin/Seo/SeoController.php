<?php

namespace App\Http\Controllers\Admin\Seo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SeoController extends Controller
{
    public function Seo(){
    	$seo=DB::table('seo')->first();
    	return view('admin.seo.seo',compact('seo'));
    }

    public function UpdateSeo(Request $request)
    {
        $id=$request->id;
         $data=array();
         $data['meta_title']=$request->meta_title;
         $data['meta_author']=$request->meta_author;
         $data['meta_tag']=$request->meta_tag;
         $data['meta_description']=$request->meta_description;
         $data['google_analytics']=$request->google_analytics;
         $data['bing_analytics']=$request->bing_analytics;
         DB::table('seo')->where('id',$id)->update($data);
         $notification=array(
                 'messege'=>'SEO Updated',
                 'alert-type'=>'success'
                       );
        return Redirect()->back()->with($notification);
    }

    
}
