<?php

namespace App\Http\Controllers\Forntend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
     public function Show_category_by_product($category_id){
        $Show_category_by_product=DB::table('products')
    			  ->join('categories','products.category_id','categories.category_id')    			  
    			  ->select('products.*','categories.category_name')
    			  ->where('categories.category_id',$category_id)
    			  ->limit(18)
    	          ->get();
    	return view('Frontend.category_by_product',compact('Show_category_by_product'));
    }

    public function Show_product_details($id){

    	$product=DB::table('products')
    			  ->join('categories','products.category_id','categories.category_id')
    			  ->join('sub_categories','products.sub_category_id','sub_categories.sub_category_id')
    	          ->where('products.id',$id)
    			  ->limit(6)
    	          ->first();
    	return view('Frontend.product_details',compact('product'));
    }

}
