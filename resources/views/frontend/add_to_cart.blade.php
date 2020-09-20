@extends('frontend.layouts.master')
@section('content')

    <!-- Shop Cart Section Begin -->
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
                    <div class="cart__btn">
                        <a href="{{URL::to('/')}}">Continue Shopping</a>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-6">
                    {{-- <div class="discount__content">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">Apply</button>
                        </form>
                    </div> --}}
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>TK {{Cart::subtotal()}}</span></li>
                            <li>Tax <span>{{Cart::tax(2)}}</span></li>
                            <li>Total <span>Tk {{Cart::total()}}</span></li>
                        </ul>
                        <?php
                                $id=Session::get('id');
                                ?>

                                <?php if($id !=NULL) { ?>
                        <a href="{{URL::to('/checkout')}}" class="primary-btn">Proceed to checkout</a>
                        <?php } else {?>
                         <a href="{{URL::to('/login-check')}}" class="primary-btn">Proceed to checkout</a>
                         <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Cart Section End -->


@endsection