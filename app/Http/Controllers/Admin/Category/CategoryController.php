<?php

namespace App\Http\Controllers\Admin\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Category;
use App\Model\Admin\Brand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Image;

class CategoryController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function category(){
    	$category=Category::all();
    	return view('admin.category.category',compact('category'));
    }

    public function storecategory(Request $request){
    	$validatedData = $request->validate([
        'category_name' => 'required|unique:categories|max:75',
        'category_icon' => 'required',
    	]);

        // $data=array();
        // $data['category_name']=$request->category_name;
        // DB::table('categories')->insert($data);

        $data=array();
        $data['category_name']=$request->category_name;
        $image=$request->file('category_icon');
        if($image) {
            $image_name=date('d-m-y_H_s_i');
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/media/category/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            $data['category_icon']=$image_url;
            $category=DB::table('categories')
                ->insert($data);
            $notification=array(
                'message'=>'Category Inserted Succesfully',
                'alert-type'=>'success'
            );
        return redirect()->back()->with($notification);
        }else{
            $category=DB::table('categories')
                ->insert($data);
            $notification=array(
                'message'=>'Done',
                'alert-type'=>'success'
            );
        return redirect()->back()->with($notification);
        }

    	// $category = new Category();
    	// $category ->category_name=$request->category_name;
    	// $category ->save();

    	// $notification=array(
    	// 	'message'=>'Category Inserted Succesfully',
    	// 	'alert-type'=>'success'
    	// );
    	// return redirect()->back()->with($notification);
    }

    public function DeleteCategory($id){
        $data=DB::table('categories')->where('id',$id)->first();
        $image=$data->category_icon;
        unlink($image);
        $category=DB::table('categories')->where('id',$id)->delete();
        $notification = array(
            'message'=>'Category Successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);
    }
    

    public function EditCategory($id){
        $category = DB::table('categories')->where('id',$id)->first();
        return view('admin.category.edit_category',compact('category'));
    }

    public function UpdateCategory(Request $request,$id){
        $old_one=$request->old_one;
        $category_icon=$request->category_icon;
        $data=array();
        $data['category_name']=$request->category_name;
        $update=DB::table('categories')->where('id',$id)->update($data);
        
        // Image One Done
        if ($request->has('category_icon') && $request->has('old_one')) {
          if ($old_one) {
            unlink($old_one);
             $image_one_name= hexdec(uniqid()).'.'.$category_icon->getClientOriginalExtension();
                Image::make($category_icon)->resize(300,300)->save('public/media/category/'.$image_one_name);
                $data['category_icon']='public/media/category/'.$image_one_name;
                DB::table('categories')->where('id',$id)->update($data);
            $notification=array(
                     'message'=>'Successfully Category Updated ',
                     'alert-type'=>'success'
                    );
             return Redirect()->route('admin.categories')->with($notification);
           }else{
            
                $image_one_name= hexdec(uniqid()).'.'.$category_icon->getClientOriginalExtension();
                Image::make($category_icon)->resize(300,300)->save('public/media/category/'.$image_one_name);
                $data['category_icon']='public/media/category/'.$image_one_name;
                DB::table('categories')->where('id',$id)->update($data);
            $notification=array(
                     'message'=>'Successfully Category Updated ',
                     'alert-type'=>'success'
                    );
             return Redirect()->route('admin.categories')->with($notification);
           }           
        }
        $notification=array(
                     'message'=>'Successfully Category Updated ',
                     'alert-type'=>'success'
                    );
             return Redirect()->route('admin.categories')->with($notification);
    }
    // public function UpdateCategory(Request $request,$id){
    //     // $validatedData = $request->validate([
    //     // 'category_name' => 'required|max:75',
    //     // ]);

    //     $oldlogo=$request->old_logo;
    //     $data=array();
    //     $data['category_name']=$request->category_name;
    //     $image=$request->file('category_icon');
    //     $update=DB::table('categories')->where('id',$id)->update($data);

    //     if ($image) {
    //         unlink($oldlogo);
    //         $image_name=date('d-m-y_H_s_i');
    //         $ext=strtolower($image->getClientOriginalExtension());
    //         $image_full_name=$image_name.'.'.$ext;
    //         $upload_path='public/media/category/';
    //         $image_url=$upload_path.$image_full_name;
    //         $success=$image->move($upload_path,$image_full_name);

    //         $data['category_icon']=$image_url;
    //         $category=DB::table('categories')
    //             ->where('id',$id)->update($data);
    //         $notification=array(
    //             'message'=>'Succesfully Category Updated',
    //             'alert-type'=>'success'
    //         );
    //     return redirect()->route('admin.categories')->with($notification);
    //     }else{
    //         $category=DB::table('categories')
    //             ->where('id',$id)->update($data);
    //         $notification=array(
    //             'message'=>'Update without Image',
    //             'alert-type'=>'success'
    //         );
    //     return redirect()->route('admin.categories')->with($notification);
    //     } 
    // }

    public function brand(){
        $brand=Brand::all();
        return view('admin.category.brand',compact('brand'));
    }

    public function storebrand(Request $request){
        $validatedData = $request->validate([
        'brand_name' => 'required|unique:brands|max:55',
        'brand_logo' => 'required',
        ]);

        $data=array();
        $data['brand_name']=$request->brand_name;
        $image=$request->file('brand_logo');
        if($image) {
            $image_name=date('d-m-y_H_s_i');
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/media/brand/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            $data['brand_logo']=$image_url;
            $brand=DB::table('brands')
                ->insert($data);
            $notification=array(
                'message'=>'Succesfully Brand Inserted',
                'alert-type'=>'success'
            );
        return redirect()->back()->with($notification);
        }else{
            $brand=DB::table('brands')
                ->insert($data);
            $notification=array(
                'message'=>'Done',
                'alert-type'=>'success'
            );
        return redirect()->back()->with($notification);
        }

        
    }

    public function DeleteBrand($id){
        $data=DB::table('brands')->where('id',$id)->first();
        $image=$data->brand_logo;
        unlink($image);
        $brand=DB::table('brands')->where('id',$id)->delete();
        $notification = array(
            'message'=>'Successfully Brand Deleted',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);
    }

    public function EditBrand($id){
        $brand = DB::table('brands')->where('id',$id)->first();
        return view('admin.category.edit_brand',compact('brand'));
    }

    public function UpdateBrand(Request $request,$id){
        $oldlogo=$request->old_logo;
        $data=array();
        $data['brand_name']=$request->brand_name;
        $image=$request->file('brand_logo');
        if ($image) {
            unlink($oldlogo);
            $image_name=date('d-m-y_H_s_i');
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/media/brand/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            $data['brand_logo']=$image_url;
            $brand=DB::table('brands')
                ->where('id',$id)->update($data);
            $notification=array(
                'message'=>'Succesfully Brand Updated',
                'alert-type'=>'success'
            );
        return redirect()->route('admin.brands')->with($notification);
        }else{
            $brand=DB::table('brands')
                ->where('id',$id)->update($data);
            $notification=array(
                'message'=>'Update without Image',
                'alert-type'=>'success'
            );
        return redirect()->route('admin.brands')->with($notification);
        }       
    }

    public function subcategories()
    {
        $category=DB::table('categories')->get();
        $subcat=DB::table('subcategories')
               ->join('categories','subcategories.category_id','categories.id')
               ->select('subcategories.*','categories.category_name')
               ->get();
        return view('admin.category.subcategory',compact('category','subcat'));
    }

    public function storesubcat(Request $request){
        $validatedData = $request->validate([
        'category_id' => 'required',
        'subcategory_name' => 'required',
        ]);

        $data=array();
        $data['category_id']=$request->category_id;
        $data['subcategory_name']=$request->subcategory_name;
        DB::table('subcategories')->insert($data);  
            $notification=array(
                'message'=>'Sub-Category Inserted',
                'alert-type'=>'success'
            );
        return redirect()->back()->with($notification);
    }

    public function DeleteSubCat($id){
        DB::table('subcategories')->where('id',$id)->delete();
        $notification = array(
            'message'=>'Sub-Category Successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);
    }

    public function EditSubCat($id){
        $subcat = DB::table('subcategories')->where('id',$id)->first();
        $category=DB::table('categories')->get();
        return view('admin.category.edit_subcategory',compact('subcat','category'));
    }

    public function UpdateSubCat(Request $request,$id){
        $validatedData = $request->validate([
        'subcategory_name' => 'required|max:75',
        ]);

        $data=array();
        $data['category_id']=$request->category_id;
        $data['subcategory_name']=$request->subcategory_name;
        $update=DB::table('subcategories')->where('id',$id)->update($data);

        if ($update) {
            $notification = array(
            'message'=>'Sub-Category Updated',
            'alert-type'=>'success'
        );
            return redirect()->route('admin.sub.categories')->with($notification);
        }else{
            $notification = array(
            'message'=>'Nothing to Updated',
            'alert-type'=>'error'
        );
            return redirect()->route('admin.sub.categories')->with($notification);
        }
    }


}
