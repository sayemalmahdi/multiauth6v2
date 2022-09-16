<?php

namespace App\Http\Controllers\Admin\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Image;

class ProductController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function AddProduct()
    {
    	$category=DB::table('categories')->get();
    	$brand=DB::table('brands')->get();
    	return view('admin.product.add_product',compact('category','brand'));
    }

    //subcategory collect by ajax request
    public function GetSubcat($category_id)
    {
    	$cat = DB::table("subcategories")->where("category_id",$category_id)->get();
        return json_encode($cat);
    }

    public function Store(Request $request)
    {
        $data=array();
        $data['product_name']=$request->product_name;
        $data['product_code']=$request->product_code;
        $data['product_quantity']=$request->product_quantity;
        $data['category_id']=$request->category_id;
        $data['subcategory_id']=$request->subcategory_id;
        $data['brand_id']=$request->brand_id;
        $data['product_size']=$request->product_size;
        $data['product_color']=$request->product_color;
        $data['selling_price']=$request->selling_price;
        $data['product_details']=$request->product_details;
        $data['video_link']=$request->video_link;
        $data['main_slider']=$request->main_slider;
        $data['hot_deal']=$request->hot_deal;
        $data['best_rated']=$request->best_rated;
        $data['trend']=$request->trend;
        $data['mid_slider']=$request->mid_slider;
        $data['hot_new']=$request->hot_new;
        $data['buyone_getone']=$request->buyone_getone;
        $data['status']=1;

        $image_one=$request->image_one;
        $image_two=$request->image_two;
        $image_three=$request->image_three;

    if($image_one && $image_two && $image_three){
            $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
                Image::make($image_one)->resize(300,300)->save('public/media/product/'.$image_one_name);
                $data['image_one']='public/media/product/'.$image_one_name;

            $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
                Image::make($image_two)->resize(300,300)->save('public/media/product/'.$image_two_name);
                $data['image_two']='public/media/product/'.$image_two_name; 

            $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
                Image::make($image_three)->resize(300,300)->save('public/media/product/'.$image_three_name);
                $data['image_three']='public/media/product/'.$image_three_name; 
                
                $product=DB::table('products')
                          ->insert($data);
                    $notification=array(
                     'message'=>'Successfully Product Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('admin.all.product')->with($notification);   
        }elseif ($image_one && $image_two) {
            $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
                Image::make($image_one)->resize(300,300)->save('public/media/product/'.$image_one_name);
                $data['image_one']='public/media/product/'.$image_one_name;

            $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
                Image::make($image_two)->resize(300,300)->save('public/media/product/'.$image_two_name);
                $data['image_two']='public/media/product/'.$image_two_name;

                $product=DB::table('products')
                          ->insert($data);
                    $notification=array(
                     'message'=>'Successfully Product Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('admin.all.product')->with($notification);

        }elseif ($image_one && $image_three) {
            $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
                Image::make($image_one)->resize(300,300)->save('public/media/product/'.$image_one_name);
                $data['image_one']='public/media/product/'.$image_one_name;

            $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
                Image::make($image_three)->resize(300,300)->save('public/media/product/'.$image_three_name);
                $data['image_three']='public/media/product/'.$image_three_name;

                $product=DB::table('products')
                          ->insert($data);
                    $notification=array(
                     'message'=>'Successfully Product Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('admin.all.product')->with($notification);

        }elseif ($image_one) {
            $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
                Image::make($image_one)->resize(300,300)->save('public/media/product/'.$image_one_name);
                $data['image_one']='public/media/product/'.$image_one_name;

                $product=DB::table('products')
                          ->insert($data);
                    $notification=array(
                     'message'=>'Successfully Product Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('admin.all.product')->with($notification);
                
        }
   
    }

    public function AllProduct(){
            $product=DB::table('products')
                ->join('categories','products.category_id','categories.id')
                ->join('brands','products.brand_id','brands.id')
                ->select('products.*','categories.category_name','brands.brand_name')
                ->get();
            return view('admin.product.all_product',compact('product'));
    }

    public function Inactive($id)
    {
         DB::table('products')->where('id',$id)->update(['status'=> 0]);
         $notification=array(
                     'message'=>'Successfully Product Inactive ',
                     'alert-type'=>'success'
                    );
         return Redirect()->back()->with($notification);  
    }

    public function Active($id)
    {
         DB::table('products')->where('id',$id)->update(['status'=> 1]);
         $notification=array(
                     'message'=>'Successfully Product Aactive ',
                     'alert-type'=>'success'
                    );
         return Redirect()->back()->with($notification);
    }

    public function DeleteProduct($id)
    {
        $product=DB::table('products')->where('id',$id)->first();
        $image1=$product->image_one;
        $image2=$product->image_two;
        $image3=$product->image_three;
        if ($image1 && $image2 && $image3) {
            unlink($image1);
            unlink($image2);
            unlink($image3);
            DB::table('products')->where('id',$id)->delete();
            $notification=array(
                         'message'=>'Successfully Product Deleted ',
                         'alert-type'=>'success'
                        );
            return Redirect()->back()->with($notification);
        }elseif ($image1 && $image2) {
            unlink($image1);
            unlink($image2);
            DB::table('products')->where('id',$id)->delete();
            $notification=array(
                         'message'=>'Successfully Product Deleted ',
                         'alert-type'=>'success'
                        );
            return Redirect()->back()->with($notification);
        }elseif ($image1 && $image3) {
            unlink($image1);
            unlink($image3);
            DB::table('products')->where('id',$id)->delete();
            $notification=array(
                         'message'=>'Successfully Product Deleted ',
                         'alert-type'=>'success'
                        );
            return Redirect()->back()->with($notification);
        }elseif ($image1) {
            unlink($image1);
            DB::table('products')->where('id',$id)->delete();
            $notification=array(
                         'message'=>'Successfully Product Deleted ',
                         'alert-type'=>'success'
                        );
            return Redirect()->back()->with($notification);
            }
    }

    public function ViewProduct($id){
        $product=DB::table('products')
                ->join('categories','products.category_id','categories.id')
                ->join('brands','products.brand_id','brands.id')
                ->join('subcategories','products.subcategory_id','subcategories.id')
                ->select('products.*','categories.category_name','brands.brand_name','subcategories.subcategory_name')
                ->where('products.id',$id)
                ->first();
        return view('admin.product.view_product',compact('product'));

    }

    public function EditProduct($id)
    {
        $product=DB::table('products')->where('id',$id)->first();

        return view('admin.product.edit_product',compact('product'));
    }

    public function UpdateProductWithoutPhoto(Request $request,$id)
    {
        $data=array();
        $data['product_name']=$request->product_name;
        $data['product_code']=$request->product_code;
        $data['product_quantity']=$request->product_quantity;
        $data['category_id']=$request->category_id;
        $data['discount_price']=$request->discount_price;
        $data['subcategory_id']=$request->subcategory_id;
        $data['brand_id']=$request->brand_id;
        $data['product_size']=$request->product_size;
        $data['product_color']=$request->product_color;
        $data['selling_price']=$request->selling_price;
        $data['product_details']=$request->product_details;
        $data['video_link']=$request->video_link;
        $data['main_slider']=$request->main_slider;
        $data['hot_deal']=$request->hot_deal;
        $data['best_rated']=$request->best_rated;
        $data['trend']=$request->trend;
        $data['mid_slider']=$request->mid_slider;
        $data['hot_new']=$request->hot_new;
        $data['buyone_getone']=$request->buyone_getone;
        
        $update=DB::table('products')->where('id',$id)->update($data);
        if ($update) {
             $notification=array(
                     'message'=>'Successfully Product Updated ',
                     'alert-type'=>'success'
                    );
             return Redirect()->route('admin.all.product')->with($notification);

        }else{
            $notification=array(
                     'message'=>'Nothing To Updated ',
                     'alert-type'=>'error'
                    );
             return Redirect()->route('admin.all.product')->with($notification);
        }
    }

    public function UpdateProductPhoto(Request $request,$id)
    {
      // $product=DB::table('products')->where('id',$id)->first();
      //   $image1=$product->image_one;
      //   $image2=$product->image_two;
      //   $image3=$product->image_three;


        $old_one=$request->old_one;
        $old_two=$request->old_two;
        $old_three=$request->old_three;

        $image_one=$request->image_one;
        $image_two=$request->image_two;
        $image_three=$request->image_three;
        $data=array();
                // Image One,Two,Three Done
        if($request->has('image_one') && $request->has('old_one')  && $request->has('image_two') && $request->has('old_two')  && $request->has('image_three') && $request->has('old_three') ){

            if ($old_one && $old_two && $old_three){
            unlink($old_one);
            unlink($old_two);
            unlink($old_three);

                $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
                Image::make($image_one)->resize(300,300)->save('public/media/product/'.$image_one_name);
                $data['image_one']='public/media/product/'.$image_one_name;
                
                $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
                Image::make($image_two)->resize(300,300)->save('public/media/product/'.$image_two_name);
                $data['image_two']='public/media/product/'.$image_two_name;

                $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
                Image::make($image_three)->resize(300,300)->save('public/media/product/'.$image_three_name);
                $data['image_three']='public/media/product/'.$image_three_name;
                DB::table('products')->where('id',$id)->update($data);
                $notification=array(
                         'message'=>'Image One and Two and Three Updated ',
                         'alert-type'=>'success'
                        );
                return Redirect()->route('admin.all.product')->with($notification);
            }else{
              $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
                Image::make($image_one)->resize(300,300)->save('public/media/product/'.$image_one_name);
                $data['image_one']='public/media/product/'.$image_one_name;
                
                $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
                Image::make($image_two)->resize(300,300)->save('public/media/product/'.$image_two_name);
                $data['image_two']='public/media/product/'.$image_two_name;

                $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
                Image::make($image_three)->resize(300,300)->save('public/media/product/'.$image_three_name);
                $data['image_three']='public/media/product/'.$image_three_name;
                DB::table('products')->where('id',$id)->update($data);
                $notification=array(
                         'message'=>'Image One and Two and Three Updated ',
                         'alert-type'=>'success'
                        );
                return Redirect()->route('admin.all.product')->with($notification);
            }

           
                    // Image One,Two Done     

        }if($request->has('image_one') && $request->has('old_one') && $request->has('image_two') && $request->has('old_two')){      
            if ($old_one && $old_two){
               unlink($old_one);
               unlink($old_two);

               $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
               Image::make($image_one)->resize(300,300)->save('public/media/product/'.$image_one_name);
               $data['image_one']='public/media/product/'.$image_one_name;
                 
               $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
               Image::make($image_two)->resize(300,300)->save('public/media/product/'.$image_two_name);
               $data['image_two']='public/media/product/'.$image_two_name;

                DB::table('products')->where('id',$id)->update($data);

            $notification=array(
                     'message'=>'Image One and Two Updated ',
                     'alert-type'=>'success'
                    );
             return Redirect()->route('admin.all.product')->with($notification);
            }else{
                $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
                Image::make($image_one)->resize(300,300)->save('public/media/product/'.$image_one_name);
                $data['image_one']='public/media/product/'.$image_one_name;

                $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
                Image::make($image_two)->resize(300,300)->save('public/media/product/'.$image_two_name);
                $data['image_two']='public/media/product/'.$image_two_name;

              DB::table('products')->where('id',$id)->update($data);

            $notification=array(
                     'message'=>'Image One and Two Updated ',
                     'alert-type'=>'success'
                    );
             return Redirect()->route('admin.all.product')->with($notification);
            }            
           
           
              // Image One,Three Done

        }if($request->has('image_one') && $request->has('old_one') && $request->has('image_three') && $request->has('old_three')){            

           if ($old_one && $old_three){
            unlink($old_one);
            unlink($old_three);

                $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
                Image::make($image_one)->resize(300,300)->save('public/media/product/'.$image_one_name);
                $data['image_one']='public/media/product/'.$image_one_name;
                

                $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
                Image::make($image_three)->resize(300,300)->save('public/media/product/'.$image_three_name);
                $data['image_three']='public/media/product/'.$image_three_name;
                DB::table('products')->where('id',$id)->update($data);
                $notification=array(
                         'message'=>'Image One and Three Updated ',
                         'alert-type'=>'success'
                        );
                return Redirect()->route('admin.all.product')->with($notification);        

        }else{
            $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
            Image::make($image_one)->resize(300,300)->save('public/media/product/'.$image_one_name);
            $data['image_one']='public/media/product/'.$image_one_name;
                
                
            $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
            Image::make($image_three)->resize(300,300)->save('public/media/product/'.$image_three_name);
            $data['image_three']='public/media/product/'.$image_three_name;

            DB::table('products')->where('id',$id)->update($data);
            $notification=array(
                      'message'=>'Image One and Three Updated ',
                      'alert-type'=>'success'
                    );
                return Redirect()->route('admin.all.product')->with($notification);
        }

          // Image Two,Three Done
        
    }if($request->has('image_two') && $request->has('old_two') && $request->has('image_three') && $request->has('old_three')){
                
           if ($old_two && $old_three){
            unlink($old_two);
            unlink($old_three);
                
                $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
                Image::make($image_two)->resize(300,300)->save('public/media/product/'.$image_two_name);
                $data['image_two']='public/media/product/'.$image_two_name;

                $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
                Image::make($image_three)->resize(300,300)->save('public/media/product/'.$image_three_name);
                $data['image_three']='public/media/product/'.$image_three_name;
                DB::table('products')->where('id',$id)->update($data);
                $notification=array(
                         'message'=>'Image Two and Three Updated ',
                         'alert-type'=>'success'
                        );
                return Redirect()->route('admin.all.product')->with($notification);
            }else{
                $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
                Image::make($image_two)->resize(300,300)->save('public/media/product/'.$image_two_name);
                $data['image_two']='public/media/product/'.$image_two_name;

                $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
                Image::make($image_three)->resize(300,300)->save('public/media/product/'.$image_three_name);
                $data['image_three']='public/media/product/'.$image_three_name;
                DB::table('products')->where('id',$id)->update($data);
                $notification=array(
                         'message'=>'Image Two and Three Updated ',
                         'alert-type'=>'success'
                        );
                return Redirect()->route('admin.all.product')->with($notification);
            }

           
          

        }       

              // Image One Done
        if ($request->has('image_one') && $request->has('old_one')) {
          if ($old_one) {
            unlink($old_one);
             $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
                Image::make($image_one)->save('public/media/product/'.$image_one_name);
                $data['image_one']='public/media/product/'.$image_one_name;
                DB::table('products')->where('id',$id)->update($data);
            $notification=array(
                     'message'=>'Image One Updated ',
                     'alert-type'=>'success'
                    );
             return Redirect()->route('admin.all.product')->with($notification);
           }else{
            
                $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
                Image::make($image_one)->resize(300,300)->save('public/media/product/'.$image_one_name);
                $data['image_one']='public/media/product/'.$image_one_name;
                DB::table('products')->where('id',$id)->update($data);
            $notification=array(
                     'message'=>'Image One Updated ',
                     'alert-type'=>'success'
                    );
             return Redirect()->route('admin.all.product')->with($notification);
           }           
        }

            // Image Two Done
      if($request->has('image_two') && $request->has('old_two')) {          
            if($old_two) {
            unlink($old_two);
                $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
                Image::make($image_two)->resize(300,300)->save('public/media/product/'.$image_two_name);
                $data['image_two']='public/media/product/'.$image_two_name;
                DB::table('products')->where('id',$id)->update($data);
            $notification=array(
                     'message'=>'Image Two Updated ',
                     'alert-type'=>'success'
                    );
             return Redirect()->route('admin.all.product')->with($notification);
            }else{
              $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
                Image::make($image_two)->resize(300,300)->save('public/media/product/'.$image_two_name);
                $data['image_two']='public/media/product/'.$image_two_name;
                DB::table('products')->where('id',$id)->update($data);
            $notification=array(
                     'message'=>'Image Two Updated ',
                     'alert-type'=>'success'
                    );
             return Redirect()->route('admin.all.product')->with($notification);
            }
           
           // Image Three Done
        }if($request->has('image_three') && $request->has('old_three')) {  
            if($old_three) {
                unlink($old_three);
                $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
                Image::make($image_three)->resize(300,300)->save('public/media/product/'.$image_three_name);
                $data['image_three']='public/media/product/'.$image_three_name;
                DB::table('products')->where('id',$id)->update($data);
            $notification=array(
                     'message'=>'Image Three Updated ',
                     'alert-type'=>'success'
                    );
             return Redirect()->route('admin.all.product')->with($notification);
            }else{
              $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
                Image::make($image_three)->resize(300,300)->save('public/media/product/'.$image_three_name);
                $data['image_three']='public/media/product/'.$image_three_name;
                DB::table('products')->where('id',$id)->update($data);
                $notification=array(
                     'message'=>'Image Three Updated ',
                     'alert-type'=>'success'
                    );
             return Redirect()->route('admin.all.product')->with($notification);
            }
           
        }$notification=array(
                         'message'=>'Nothing To Update',
                         'alert-type'=>'error'
                        );
         return Redirect()->route('admin.all.product')->with($notification);
    }





}
