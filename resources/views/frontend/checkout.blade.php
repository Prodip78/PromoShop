@extends('frontend.layouts.master')
@section('content')

    <section class="checkout spad">
        <div class="container">
            @php
             $contents=Cart::content();

             @endphp
            <div class="row">

                
            </div>
            <form action="{{URL::to('/save-billing-details')}}" class="checkout__form" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Billing detail</h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>First Name <span>*</span></p>
                                    <input type="text" name="first_name" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Last Name <span>*</span></p>
                                    <input type="text" name="last_name" required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>City <span>*</span></p>
                                    <input type="text" name="city" required="">
                                </div>
                                <div class="checkout__form__input">
                                    <p>Address <span>*</span></p>
                                    <input type="text" name="address" placeholder="Street Address" required="">
                                     </div>
                               
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Phone <span>*</span></p>
                                    <input type="text" name="phone" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Email <span>*</span></p>
                                    <input type="text" name="email" required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                
                                   <button type="submit" class="site-btn">Done</button> 
                                   
                                </div>
                            </div>
                        </div>


                        
                       {{--  <div class="col-lg-4">
                           
                            <div class="checkout__order">
                                 
                                <h5>Your order</h5>
                                <div class="checkout__order__product">
                                    <?php
                                     foreach ($contents as $view) {?>
                                    <ul>
                                        <li>
                                            <span class="top__text">Product</span>
                                            <span class="top__text__right">Total</span>
                                        </li>
                                        <li>{{$view->name}}<span>$ 300.0</span></li>
                                        
                                    </ul>
                                    <?php }?>
                                </div>
                                <div class="checkout__order__total">
                                    <ul>
                                        <li>Subtotal <span>$ {{Cart::subtotal()}}</</span></li>
                                        <li>Total <span>$ 750.0</span></li>
                                    </ul>
                           
                            

                                <div class="checkout__order__widget">
                                    <label for="o-acc">
                                        Create an acount?
                                        <input type="checkbox" id="o-acc">
                                        <span class="checkmark"></span>
                                    </label>
                                    <p>Create am acount by entering the information below. If you are a returing customer
                                    login at the top of the page.</p>
                                    <label for="check-payment">
                                        Cheque payment
                                        <input type="checkbox" id="check-payment">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label for="paypal">
                                        PayPal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">Place oder</button>
                               

                            </div>
                                                    </div>

                    </div> --}}
                </form>
            </div>
        </section>
@endsection