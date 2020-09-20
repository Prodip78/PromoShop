<?php

namespace App\Http\Controllers\Forntend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Payment;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Session;
use Cart;
use  App\Admin\Product;
class OrderController extends Controller
{
    public function order_place(Request $request){
   	$payment_method=$request->payment_method;
   	

	$payment_data = array();
	$payment_data['payment_method']=$payment_method;
	$payment_data['payment_status']='pending';

	$payment_id=DB::table('payments')
							->insertGetId($payment_data);

   $order_data=array();
   $order_data['customer_id']=Session::get('id');
   $order_data['shipping_id']=Session::get('id');
   $order_data['payment_id'] =$payment_id;
   $order_data['order_total'] =Cart::total();
   $order_data['order_status'] ='pending';

   $order_id=DB::table('orders')
   					->insertGetId($order_data);

 $contents=Cart::content();


$order_details_data=array();

foreach ($contents as $view) {
	$order_details_data['order_id']=$order_id;
	$order_details_data['product_id']=$view->id;
	$order_details_data['product_name']=$view->name;
	$order_details_data['product_price']=$view->price;
	$order_details_data['quantity']=$view->qty;

	DB::table('order__details')
	           ->insert($order_details_data);

}

if ($payment_method=='Handcash') {
	Cart::destroy();
	return view('frontend.handcash');
}elseif ($payment_method=='cart') {
	echo "Successfully done by cart";
}elseif ($payment_method=='Bkash') {
	echo "Successfully done by Bkash";
}else{
	echo "not selected";
}

  }

  public function manage_order(){

  	$manage_order=DB::table('orders')
    			 ->join('shippings','orders.shipping_id','shippings.id')
    			   ->select('orders.*','shippings.first_name')
    	          ->get();
    	return view('Admin.manageOrder.manage_order',compact('manage_order'));
    	         // echo "<pre>";
    	         // print_r($manage_order);
    	         // echo "</pre>";
    	         // exit();

  }

  public function view_order($order_id){
      $order_view=DB::table('orders')
            //->join('customers','orders.customer_id','customers.customer_id')
            ->join('order__details','orders.order_id','order__details.order_id')
            ->join('shippings','orders.shipping_id','shippings.id')
            ->select('orders.*','order__details.*','shippings.*')
            ->get();


  return view('Admin.manageOrder.order_view',compact('order_view'));

  }

  public function delete_order($order_id){
    $order=DB::table('orders')->where('order_id',$order_id)->delete();

        return back()->with('alert', 'Delated successfully!!');
      
  }

  public function search(Request $request){

//echo $request->search;



    $search=$request->search;

    $product = Product::where('product_name','like','%'.$search.'%')->get();

   // return $product;
    return view('frontend.search_results',['product' =>$product,'search'=>$search]);


  }
}
