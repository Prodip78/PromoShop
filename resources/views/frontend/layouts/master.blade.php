<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promo | Shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('public/user/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/user/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/user/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/user/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/user/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/user/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/user/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/user/css/style.css')}}" type="text/css">
   <link href="build/toastr.css" rel="stylesheet" type="text/css" />
    <style>
        .row {
            margin-left: 0;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            {{-- <?php
            $all_published_logo =DB::table('logos')
                                                            
                                       ->get();
            foreach ($all_published_logo as $view) {?>
 --}}            <a href="./index.html"><img src="" alt=""></a>
            {{-- <?php }?>
 --}}        </div>
        <div id="mobile-menu-wrap"></div>
       
        <div class="offcanvas__auth">
            <a href="#">Login</a>
            
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                         <?php
            $all_published_logo =DB::table('logos')
                                                            
                                       ->get();
            foreach ($all_published_logo as $view) {?>
                        <a href="{{URL::to('/')}}"><img src="{{$view->logo}}" style="height: 110px;width: 150px;" ></a>
                        <?php }?>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href={{URL::to('/')}}>Home</a></li>
                            <li><a href="#">Category</a>
                            <ul class="dropdown">
                            <?php
                                $all_published_category =DB::table('categories')
                                                            
                                                            ->get();
                            foreach ($all_published_category as $view) {?>
                            <li><a href="{{URL::to('/product_category'.$view->category_id)}}">{{$view->category_name}}</a></li>
                            <?php }?>
                            </ul>
                            
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./product-details.html">Product Details</a></li>
                                    <li><a href="{{URL::to('/show-cart')}}">Shop Cart</a></li>
                                    <?php $id=Session::get('id');
                                  $shipping_id=Session::get('id');
                                ?>
                                <?php if($id !=NULL && $shipping_id==NULL) { ?>
                                    <li><a href="{{URL::to('/checkout')}}">Checkout</a></li>
                                    <?php } if($id !=NULL && $shipping_id!==NULL) {?>
                                    <li><a href="{{URL::to('/payment')}}">Checkout</a></li>
                                    <?php }else { ?>
                                    <li><a href="{{URL::to('/login-check')}}">Checkout</a></li>

                                    <?php }?>

                                    
                                </ul>
                            </li>
                            
                            <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                            <li><a href="{{URL::to('/show-cart')}}">Shop Cart</a></li>

                            
                        </ul>
                        <br>
                        <form action="{{ route('search.product') }}" method="get">
                                    <div class="input-group">
                                        <input type="search" name="search" class="form-control">
                                        <span class="input-group-prepend">
                                            <button type="submit" class="btn btn-primary">search</button>
                                            
                                        </span>
                                        
                                    </div>
                                </form>
                        
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <?php
                                $id=Session::get('id');
                                ?>
                                <?php if($id !=NULL) { ?>
                            <a href="{{URL::to('/customer-logout')}}">Logout</a>
                            <?php } else {?>
                            <a href="{{URL::to('/login-check')}}">Login</a>
                            <?php } ?>

                            
                        </div>
                        <ul class="header__right__widget">
                            
                            {{-- <li><span class="icon_search search-switch"></span></li> --}}
                            {{-- <div class="col-md-3"> --}}
                                
                                
                            {{-- </div> --}}
                            
                            
                            <?php $id=Session::get('id');
                                  $shipping_id=Session::get('id');
                                ?>
                                <?php if($id !=NULL && $shipping_id==NULL) { ?>
                            <li><a href="{{URL::to('/checkout')}}"><span class="icon_bag_alt"></span></a></li>
                            <?php } if($id !=NULL && $shipping_id!==NULL) {?>
                            <li><a href="{{URL::to('/payment')}}"><span class="icon_bag_alt"></span></a></li>
                            <?php }else { ?>
                            <li><a href="{{URL::to('/login-check')}}"><span class="icon_bag_alt"></span></a></li>
                            <?php }?>
                        </ul>

                       
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

   @yield('content')


<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <?php
            $all_published_logo =DB::table('logos')
                                                            
                                       ->get();
            foreach ($all_published_logo as $view) {?>
                        <a href="{{URL::to('/')}}"><img src="{{$view->logo}}" style="height: 200px;width: 150px;" alt=""></a>
                        <?php }?>
                    </div>
                    
                    <div class="footer__payment">
                        <a href="#"><img src="img/payment/payment-1.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-2.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-3.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-4.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-5.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Quick links</h6>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>Account</h6>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Orders Tracking</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Wishlist</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6>NEWSLETTER</h6>
                    <form action="#">
                        <input type="text" placeholder="Email">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                {{-- <div class="footer__copyright__text">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                </div> --}}
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="{{asset('public/user/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('public/user/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/user/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('public/user/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('public/user/js/mixitup.min.js')}}"></script>
<script src="{{asset('public/user/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('public/user/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('public/user/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/user/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('public/user/js/main.js')}}"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="toastr.js"></script>




</script>
</body>

</html>