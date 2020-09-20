@extends('frontend.layouts.master')
@section('content')

 <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__left product__thumb nice-scroll">
                            <a class="pt active" href="#product-1">
                                <img src="{{$product->product_image}}" alt="">
                            </a>
                            <a class="pt" href="#product-2">
                                <img src="{{$product->product_image}}" alt="">
                            </a>
                            
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-hash="product-1" class="product__big__img" src="{{$product->product_image}}" alt="">
                                <img data-hash="product-2" class="product__big__img" src="{{$product->product_image}}" alt="">
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3>{{$product->product_name}} <span>{{$product->category_name}}</span></h3>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>( 138 reviews )</span>
                        </div>
                        <div class="product__details__price">TK {{$product->product_price}}</div>
                        <p>{{$product->product_short_description}}</p>
                        <div class="product__details__button">
                        	<form action="{{URL::to('/add-to-cart')}}" method="post">
										@csrf
                            <div class="quantity">
                                <span>Quantity:</span>
                                <div class="pro-qty">
                                    <input type="text" name="qty" value="1">
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                </div>
                            </div>
                            {{-- <a href="#" class="cart-btn"><span class="icon_bag_alt"></span> Add to cart</a> --}}
                            <button type="submit" class="cart-btn">
										<span class="icon_bag_alt"></span>
										Add to cart
									</button>
                            </form>
                        </div>
                        <div class="product__details__widget">
                            <ul>
                                <li>
                                    <span>Availability:</span>
                                    <div class="stock__checkbox">
                                        <label for="stockin">
                                            In Stock
                                            <input type="checkbox" id="stockin">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <span>Available color:</span>
                                    <div class="color__checkbox">
                                        {{$product->product_color}}
                                    </div>
                                </li>
                                <li>
                                    <span>Available size:</span>
                                    <div class="size__btn">
                                        {{$product->product_size}}
                                    </div>
                                </li>
                                <li>
                                    <span>Promotions:</span>
                                    <p>Free shipping</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                            </li>
                           
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <h6>Description</h6>
                               {{$product->product_long_description}}
                            </div>
                           
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Product Details Section End -->



@endsection