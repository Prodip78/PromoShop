@extends('frontend.layouts.master')
@section('content')

<section class="product spad">
    <div class="container">
        
        <div class="row property__gallery">
             @foreach($product as $view)
            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{$view->product_image}}" style="height: 300px;width: 280px;" >
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="{{$view->product_image}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                            {{-- <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="{{URL::to('/view.product'.$view->id)}}"><span class="icon_bag_alt"></span></a></li> --}}
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
            @endforeach
        </div>
    </div>
</section>

@endsection