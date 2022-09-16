<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use DB;
use Response;
use Auth;
use Session;

class CartController extends Controller
{
    public function AddCart($id)
    {
    	  $product=DB::table('products')->where('id',$id)->first();
    	  $data=array();
    	  if ($product->discount_price == NULL) {
    	  	            $data['id']=$product->id;
    	                $data['name']=$product->product_name;
    	                $data['qty']=1;
    	                $data['price']= $product->selling_price;          
    	 				$data['weight']=1;
    	                $data['options']['image']=$product->image_one;
                        $data['options']['color']='';
                        $data['options']['size']='';
    	               Cart::add($data);
    	               return response()->json(['success' => 'Successfully Added on your Cart']);
    	   }else{
    	               $data['id']=$product->id;
    	                $data['name']=$product->product_name;
    	                $data['qty']=1;
    	                $data['price']= $product->discount_price;          
    	 				$data['weight']=1;
    	                $data['options']['image']=$product->image_one;  
                        $data['options']['color']='';
                        $data['options']['size']=''; 
    	             
    	                Cart::add($data);  
    	              return response()->json(['success' => 'Successfully Added on your Cart']);   
    	 }
    }

    public function check()
    {
    	$content=Cart::content();
    	return response()->json($content);
    }

    public function showCart()
    {
        $cart=Cart::content();
        return view('frontend.pages.cart',compact('cart'));
    }

    public function removeCartitem($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back();
    }

    public function UpdateCartitem(Request $request)
    {
        $rowId =$request->productid;
        $qty=$request->qty;
        Cart::update($rowId, $qty);
        return redirect()->back();
    }

    public function ViewProduct($id)
    {
         $product=DB::table('products')
                              ->join('categories','products.category_id','categories.id')
                              ->join('subcategories','products.subcategory_id','subcategories.id')
                              ->join('brands','products.brand_id','brands.id')
                              ->select('products.*','categories.category_name','subcategories.subcategory_name','brands.brand_name')
                              ->where('products.id',$id)->first();

        $color=$product->product_color;
        $product_color = explode(',', $color);

        $size=$product->product_size;
        $product_size = explode(',', $size);
        
       // return response()->json($product_color);
        return response::json(array(
                'product' => $product,
                'color' => $product_color,
                 'size' => $product_size,
         ));

    }

    public function InsertCart(Request $request)
    {
         $id=$request->product_id;
          $product=DB::table('products')->where('id',$id)->first();
          $data=array();
          if ($product->discount_price == NULL) {
                        $data['id']=$product->id;
                        $data['name']=$product->product_name;
                        $data['qty']=$request->qty;;
                        $data['price']= $product->selling_price;          
                        $data['weight']=1;
                        $data['options']['image']=$product->image_one;
                        $data['options']['color']=$request->color;
                        $data['options']['size']=$request->size;
                      Cart::add($data);
                       $notification=array(
                              'message'=>'Successfully Added on your Cart',
                               'alert-type'=>'success'
                         );
                       return Redirect()->back()->with($notification);
           }else{
                       $data['id']=$product->id;
                        $data['name']=$product->product_name;
                        $data['qty']=$request->qty;;
                        $data['price']= $product->discount_price;          
                        $data['weight']=1;
                        $data['options']['image']=$product->image_one;  
                        $data['options']['color']=$request->color;
                        $data['options']['size']=$request->size;
                        Cart::add($data);  
                      $notification=array(
                              'message'=>'Successfully Added on your Cart',
                               'alert-type'=>'success'
                         );
                       return Redirect()->back()->with($notification);
         }
    }

    // checkout
    public function Checkout()
    {
        if (Auth::check()) {
              $cart=Cart::content();
              return view('frontend.pages.checkout',compact('cart'));
        }else{
           $notification=array(
                              'messege'=>'AT first login your account',
                               'alert-type'=>'success'
                         );
          return redirect()->route('login')->with($notification);
        }
    }

    public function Coupon(Request $request)
    {
        $coupon=$request->coupon;
        $check=DB::table('coupons')->where('coupon',$coupon)->first();
        if ($check) {
              session::put('coupon',[
                  'name' => $check->coupon,
                  'discount' => $check->discount,
                  'balance' => Cart::Subtotal() - $check->discount
              ]);
              $notification=array(
                              'message'=>'Successfully Coupon Applied',
                               'alert-type'=>'success'
                         );
            return redirect()->back()->with($notification);
        }else{
            $notification=array(
                              'message'=>'Invalid Coupon',
                               'alert-type'=>'error'
                         );
            return redirect()->back()->with($notification);
        }

    }

    public function CouponRemove()
    {
        session::forget('coupon');
        $notification=array(
                              'message'=>'Coupon Removed',
                               'alert-type'=>'success'
                         );
            return redirect()->back()->with($notification);
        // return redirect()->back();
    }



    
}
