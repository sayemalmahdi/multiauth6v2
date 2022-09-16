<?php

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Image;

class PostController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }
        //POST-CATEGORY CRUD------
    public function PostCategory()
    {
        $postCategory=DB::table('post_category')->get();
        return view('admin.blog.post-category',compact('postCategory'));
    }

    public function StorePostCategory(Request $request){
        $validatedData = $request->validate([
        'category_name_en' => 'required',
        'category_name_bn' => 'required',
        ]);

        $data=array();
        $data['category_name_en']=$request->category_name_en;
        $data['category_name_bn']=$request->category_name_bn;
        
        $postcategory=DB::table('post_category')
                ->insert($data);
            $notification=array(
                'message'=>'Post-Category Inserted',
                'alert-type'=>'success'
            );
        return redirect()->back()->with($notification);
  
    }

    public function DeletePostCategory($id){
        DB::table('post_category')->where('id',$id)->delete();
        $notification = array(
            'message'=>'Post-Category Successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);
    }

    public function EditPostCategory($id){
        $postCategory = DB::table('post_category')->where('id',$id)->first();
        return view('admin.blog.edit_post_category',compact('postCategory'));
    }

    public function UpdatePostCategory(Request $request,$id){
        // $validatedData = $request->validate([
        // 'category_name_en' => 'required',
        // 'category_name_bn' => 'required',
        // ]);

        $data=array();
        $data['category_name_en']=$request->category_name_en;
        $data['category_name_bn']=$request->category_name_bn;
        $update=DB::table('post_category')->where('id',$id)->update($data);

        if ($update) {
            $notification = array(
            'message'=>'Post-Category Successfully Updated',
            'alert-type'=>'success'
        );
            return redirect()->route('admin.post.category')->with($notification);
        }else{
            $notification = array(
            'message'=>'Nothing to Updated',
            'alert-type'=>'error'
        );
            return redirect()->route('admin.post.category')->with($notification);
        }
    }

        //END POST-CATEGORY CRUD------


        //START POST CRUD------
    public function create()
    {
        $category=DB::table('post_category')->get();
        //return response()->json($category);
        return view('admin.blog.add_post',compact('category'));
    }

    public function StorePost(Request $request)
    {
        $validatedData = $request->validate([
        'details_en' => 'required',
        'details_bn' => 'required',
        ]);
        
        $data=array();
        $data['post_title_en']=$request->post_title_en;
        $data['post_title_bn']=$request->post_title_bn;
        $data['category_id']=$request->category_id;
        $data['details_en']=$request->details_en;
        $data['details_bn']=$request->details_bn;

        $post_image=$request->file('post_image');
        if ($post_image) {
                $image_one_name= hexdec(uniqid()).'.'.$post_image->getClientOriginalExtension();
                Image::make($post_image)->resize(400,300)->save('public/media/post/'.$image_one_name);
                $data['post_image']='public/media/post/'.$image_one_name;
                DB::table('posts')->insert($data);
                $notification=array(
                     'message'=>'Successfully Post Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('admin.all.blogpost')->with($notification);

        }else{
             $data['post_image']='';
              DB::table('posts')->insert($data);
               $notification=array(
                     'message'=>'Successfully Post Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('admin.all.blogpost')->with($notification); 
        }
    }

    public function index()
    {
        $post=DB::table('posts')->join('post_category','posts.category_id','post_category.id')
              ->select('posts.*','post_category.category_name_en')->get();
        return view('admin.blog.all_post',compact('post'));      
    }

    public function DeletePost($id)
    {
        $post=DB::table('posts')->where('id',$id)->first();
        $image=$post->post_image;
        if ($image) {
            unlink($image);
        DB::table('posts')->where('id',$id)->delete();
        $notification=array(
                     'message'=>'Successfully Post Deleted ',
                     'alert-type'=>'success'
                    );
        return Redirect()->back()->with($notification);
        }else{
           DB::table('posts')->where('id',$id)->delete();
        $notification=array(
                     'message'=>'Successfully Post Deleted ',
                     'alert-type'=>'success'
                    );
        return Redirect()->back()->with($notification); 
        }
        
    }
    // public function DeletePost($id)
    // {
    //     $post=DB::table('posts')->where('id',$id)->first();
    //     $image=$post->post_image;
    //     if ($image) {
    //         unlink($image);
    //         DB::table('posts')->where('id',$id)->delete();
    //         $notification=array(
    //                  'message'=>'Successfully Post Deleted ',
    //                  'alert-type'=>'success'
    //                 );
    //     return Redirect()->back()->with($notification);
    //     }else{
    //         DB::table('posts')->where('id',$id)->delete();
    //         $notification=array(
    //                  'message'=>'Successfully Post Deleted ',
    //                  'alert-type'=>'success'
    //                 );
    //     return Redirect()->back()->with($notification);
    //     }
        
    // }

    public function EditPost($id)
    {
        $post=DB::table('posts')->where('id',$id)->first();
        return view('admin.blog.edit_post',compact('post'));
    }

    public function UpdatePost(Request $request,$id)
    {
        
        $data=array();
        $data['post_title_en']=$request->post_title_en;
        $data['post_title_bn']=$request->post_title_bn;
        $data['category_id']=$request->category_id;
        $data['details_en']=$request->details_en;
        $data['details_bn']=$request->details_bn;
        
        $old_image=$request->old_image;
        
        $post_image=$request->post_image;
        
        // Image One Done
        if ($request->has('post_image') && $request->has('old_image')) {
          if ($old_image) {
            unlink($old_image);
             $image_one_name= hexdec(uniqid()).'.'.$post_image->getClientOriginalExtension();
                Image::make($post_image)->resize(300,300)->save('public/media/post/'.$image_one_name);
                $data['post_image']='public/media/post/'.$image_one_name;
                DB::table('posts')->where('id',$id)->update($data);
            $notification=array(
                     'message'=>'Image One Updated ',
                     'alert-type'=>'success'
                    );
             return Redirect()->route('admin.all.blogpost')->with($notification);
           }else{
            
                $image_one_name= hexdec(uniqid()).'.'.$post_image->getClientOriginalExtension();
                Image::make($post_image)->resize(300,300)->save('public/media/post/'.$image_one_name);
                $data['post_image']='public/media/post/'.$image_one_name;
                DB::table('posts')->where('id',$id)->update($data);
            $notification=array(
                     'message'=>'Image One Updated ',
                     'alert-type'=>'success'
                    );
             return Redirect()->route('admin.all.blogpost')->with($notification);
           }           
        }else{
               // $data['post_image']=$oldimage;
               DB::table('posts')->where('id',$id)->update($data);
               $notification=array(
                     'message'=>'Successfully Post Update ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('admin.all.blogpost')->with($notification);  
        }
         
    }



}
