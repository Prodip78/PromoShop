@extends('frontend.layouts.master')
@section('content')

<section id="do_action">
	<div class="container">
		
		
		<div class="paymentCont col-sm-8">
					<div class="headingWrap">
							<h3 class="headingTop text-center">Select Your Payment Method</h3>	
							
					</div>
					

					<form action="{{URL::to('/order-place')}}" method="post">
						@csrf
						{{-- <input type="radio" name="payment_method" value="Handcash">Handcash <br>
						<input type="radio" name="payment_method" value="cart">Debit <br>
						<input type="radio" name="payment_method" value="Bkash">Bkash <br> --}}
						{{-- <input type="submit" name="submit" value="Done" class="btn btn-info"> --}}

						<input type="radio" name="payment_method" value="Handcash"><img src="{{asset('public/user/img/payment/handcash.png')}}" style="height: 40px;width: 40px;" alt=""><br>

                            <input type="radio" name="payment_method"><img src="{{asset('public/user/img/payment/payment-2.png')}}" alt=""><br>
                           <input type="radio" name="payment_method"> <img src="{{asset('public/user/img/payment/payment-3.png')}}" alt=""><br>
                           <input type="radio" name="payment_method"> <img src="{{asset('public/user/img/payment/payment-4.png')}}" alt=""><br>
                            <input type="radio" name="payment_method"><img src="{{asset('public/user/img/payment/payment-5.png')}}" alt=""><br>
						<input type="submit" name="submit" value="Done" class="btn btn-info">



					</form>


				</div>
	</div>
</section><!--/#






    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                    	@php
                    		$contents=Cart::content();

                    	@endphp

                        <table>
                            <thead>
                                <tr>
                                    <th>Product Image</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            	 <?php
                                     foreach ($contents as $view) {?>
                                <tr>
                                
                                    <td class="cart__product__item">
                                        <img src="{{$view->options->image}}" style="height: 80px;width: 80px;" alt="">
                                        <div class="cart__product__item__title">
                                            <h6>{{$view->name}}</h6>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">TK {{$view->price}}</td>
                                   <td class="cart_quantity">
								          <div class="cart_quantity_button">
									<form action="{{URL::to('/update-cart')}}" method="post">
										@csrf
									<input class="cart_quantity_input" type="text" name="qty" value="{{$view->qty}}" autocomplete="off" size="2">
									<input  type="hidden" name="rowId" value="{{$view->rowId}}">
									<input type="submit" name="submit" value="Update" class="btn btn-sm btn-info">

									</form>
								</div>
							</td>
                                    <td class="cart__total">TK {{$view->total}}</td>
                                    <td class="cart__close">  
                                    	<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart'.$view->rowId)}}">
                                    	<span class="icon_close"></span>
                                    </td>
                                    
                                </tr>
                                <?php }?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                                    </div>
                
            </div>
            <div class="row">
                <div class="col-lg-6">
                   
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>TK {{Cart::subtotal()}}</span></li>
                            <li>Tax <span>{{Cart::tax(2)}}</span></li>
                            <li>Total <span>Tk {{Cart::total()}}</span></li>
                        </ul>
                       </div>
                </div>
            </div>
        </div>
    </section>


    


@endsection