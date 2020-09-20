<?php

namespace App\Http\Controllers\Forntend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Cart;
class CartController extends Controller
{
   public function add_to_cart(Request $request){

   	$qty=$request->qty;
   	$id=$request->id;
   	$product_info =DB::table('products')
   					->where('id',$id)
   					->first();
   

   	$data['qty']=$qty;
   	$data['id']=$product_info->id;
   	$data['name']=$product_info->product_name;
   	$data['price']=$product_info->product_price;
   	$data['options']['image']=$product_info->product_image;
   	Cart::add($data);
   	return Redirect::to('/show-cart');
   
   }
   public function show_cart(){
   	$all_published_category=DB::table('categories')
   								->get();
   		return view('frontend.add_to_cart',compact('all_published_category'));

   }

   public function delete_to_cart($rowId){
   	Cart::update($rowId,0);
   return Redirect::to('/show-cart');
   }

   public function update_to_cart(Request $request){

   	$qty =$request->qty;
    	$rowId=$request->rowId;
    	Cart::update($rowId,$qty);
    	return Redirect::to('/show-cart');
   }
}
