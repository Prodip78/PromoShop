@extends('frontend.layouts.master')
@section('content')


 <!-- Categories Section Begin -->
     <section class="categories">
        <div class="container-fluid">
            <div class="row">
               <?php
                       $category =DB::table('categories')                                     
                                      ->limit(1)
                                      ->where('category_id',26)
                                      ->get();
                           foreach ($category as $view) {?>
                <div class="col-lg-6 p-0">
                    
                    <div class="categories__item categories__large__item set-bg"
                    data-setbg="{{$view->category_image}}" style="height: 650px;">
                    <div class="categories__text">
                        <h1></h1>
                        <p>{{$view->category_name}}</p>
                        <a href="{{URL::to('/product_category'.$view->category_id)}}">Shop now</a>
                    </div>
                </div>

            

            </div>
            <?php } ?>

            
            <div class="col-lg-6">
                <div class="row">
                    <?php
                       $category =DB::table('categories')
                                      ->limit(4)
                                      ->get();
                           foreach ($category as $view) {?>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg" data-setbg="{{$view->category_image}}">
                            <div class="categories__text">
                                <h4>{{$view->category_name}}</h4>
                                <p>358 items</p>
                                <a href="{{URL::to('/product_category'.$view->category_id)}}">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        
        <div class="row property__gallery">
             <?php
                                $all_published_product =DB::table('products')
                  ->join('categories','products.category_id','categories.category_id')
                  ->join('sub_categories','products.sub_category_id','sub_categories.sub_category_id')
                  ->limit(12)
                  ->get();
                            foreach ($all_published_product as $view) {?>
            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{$view->product_image}}" style="height: 300px;width: 280px;" >
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="{{$view->product_image}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="{{URL::to('/view.product'.$view->id)}}"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">{{$view->product_name}}</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">TK {{$view->product_price}}</div>
                        <div class="product__price">{{$view->product_color}}</div>
                        <div class="product__price">{{$view->product_size}}</div>


                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Banner Section Begin -->
<?php
 $banner =DB::table('banners')
           ->get();
 foreach ($banner as $view) {?>

<section class="banner set-bg" data-setbg="{{$view->banner_image}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="banner__slider owl-carousel">
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>PromoShop Collection</span>
                            <h1>Men's Jacket</h1>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>PromoShop Collection</span>
                            <h1>Women's Jacket</h1>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>PromoShop Collection</span>
                            <h1>Furniture is here..</h1>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                   
                    
                </div>
            </div>
        </div>
    </div>
    
</section>
<?php } ?>

<!-- Banner Section End -->

<!-- Trend Section Begin -->
<section class="trend spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Hot Trend</h4>
                    </div>
                    <?php
                                $all_published_product =DB::table('products')
                  ->join('categories','products.category_id','categories.category_id')
                  ->join('sub_categories','products.sub_category_id','sub_categories.sub_category_id')
                  ->orderBy('id','desc')
                  ->limit(4)
                  ->get();
                            foreach ($all_published_product as $view) {?>
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="{{$view->product_image}}" style="height: 60px;width: 80px;" alt="">
                        </div>
                        <div class="trend__item__text">
                            <h6>{{$view->product_name}}</h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">TK {{$view->product_price}}</div>
                        </div>
                    </div>
                    <?php }?>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Best seller</h4>
                    </div>

                      <?php
                                $all_published_product =DB::table('products')
                  ->join('categories','products.category_id','categories.category_id')
                  ->join('sub_categories','products.sub_category_id','sub_categories.sub_category_id')
                  ->orderBy('id','asc')
                  ->limit(4)
                  ->get();
                            foreach ($all_published_product as $view) {?>

                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="{{$view->product_image}}" style="height: 60px;width: 80px;" alt="">
                        </div>
                        <div class="trend__item__text">
                            <h6>{{$view->product_name}}"</h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">TK {{$view->product_price}}"</div>
                        </div>
                    </div>
                    <?php }?>
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Feature</h4>
                    </div>
                     <?php
                                $all_published_product =DB::table('products')
                  ->join('categories','products.category_id','categories.category_id')
                  ->join('sub_categories','products.sub_category_id','sub_categories.sub_category_id')
                  
                  ->limit(4)
                  ->get();
                            foreach ($all_published_product as $view) {?>

                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="{{$view->product_image}}" style="height: 60px;width: 80px;" alt="">
                        </div>
                        <div class="trend__item__text">
                            <h6>{{$view->product_name}}</h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">TK {{$view->product_price}}</div>
                        </div>
                    </div>
                    <?php }?>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trend Section End -->

<!-- Discount Section Begin -->
<section class="discount">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="discount__pic">
                    <img src="{{asset('public/user/img/discount.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="discount__text">
                    <div class="discount__text__title">
                        <span>Discount</span>
                        <h2>Summer 2019</h2>
                        <h5><span>Sale</span> 50%</h5>
                    </div>
                    <div class="discount__countdown" id="countdown-time">
                        <div class="countdown__item">
                            <span>22</span>
                            <p>Days</p>
                        </div>
                        <div class="countdown__item">
                            <span>18</span>
                            <p>Hour</p>
                        </div>
                        <div class="countdown__item">
                            <span>46</span>
                            <p>Min</p>
                        </div>
                        <div class="countdown__item">
                            <span>05</span>
                            <p>Sec</p>
                        </div>
                    </div>
                    <a href="#">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Discount Section End -->

<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-car"></i>
                    <h6>Free Shipping</h6>
                    <p>For all oder over $99</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-money"></i>
                    <h6>Money Back Guarantee</h6>
                    <p>If good have Problems</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-support"></i>
                    <h6>Online Support 24/7</h6>
                    <p>Dedicated support</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-headphones"></i>
                    <h6>Payment Secure</h6>
                    <p>100% secure payment</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Instagram Begin -->
<div class="instagram">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{asset('public/user/img/instagram/insta-1.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{asset('public/user/img/instagram/insta-2.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{asset('public/user/img/instagram/insta-3.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{asset('public/user/img/instagram/insta-4.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{asset('public/user/img/instagram/insta-5.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="{{asset('public/user/img/instagram/insta-6.jpg')}}">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ ashion_shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Instagram End -->









@endsection