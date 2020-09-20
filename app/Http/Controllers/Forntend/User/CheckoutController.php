<?php

namespace App\Http\Controllers\Forntend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Customer;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Session;

class CheckoutController extends Controller
{
    public function login_check(){
    	return view('frontend.login');
    }

    public function registration_customer(Request $request){

    	$data =array();
    	$data['customer_name'] =$request->customer_name;
    	$data['customer_email'] =$request->customer_email;
    	$data['password'] =$request->password;
    	$data['phone'] =$request->phone;

    	$id=DB::table('customers')
    	             ->insertGetId($data);
    	  Session::put('id',$id);
    	  Session::put('customer_name',$request->customer_name);

    	  return Redirect('/checkout');
    }

    public function checkout(){
    	return view('frontend.checkout');
    }
    public function login_customer(Request $request){
    	$customer_email=$request->customer_email;
          $password=md5($request->password);
          $result=DB::table('customers')
					->where('customer_email',$customer_email)
					->first();
	          if ($result) {

		    Session::put('id',$result->id);
		    return Redirect::to('/checkout');
						
			}else{
				return Redirect::to('/login-check');
			}	

    }

    public function customer_logout(){
    	Session::flush();
    return Redirect::to('/');
    }

    public function billing_datails(Request $request){

    	$data=array();
	$data['first_name']=$request->first_name;
	$data['last_name']=$request->last_name;
	$data['city']     =$request->city;
	$data['address']  =$request->address;
	$data['phone']    =$request->phone;
	$data['email']    =$request->email;
	$shipping_id=DB::table('shippings')
	                     ->insertGetId($data);
	     Session::put('id',$shipping_id);
	     
	  return Redirect::to('/payment'); 
    }
     public function payment(){

 	    return view('frontend.payment');
    }
}
