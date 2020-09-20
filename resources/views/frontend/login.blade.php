@extends('frontend.layouts.master')
@section('content')

<!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__content">
                        
                        <div class="contact__form">
                            <h5>Login To Your Account</h5>
                            <form action="{{URL::to('/login-customer')}}" method="post">
                                @csrf
                                <input type="email" placeholder="Email" name="customer_email">
                                <input type="password" placeholder="password" name="password">

                                <button type="submit" class="site-btn">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                            <h5>New User Singup</h5>
                            <form action="{{URL::to('/registration-customer')}}" method="post">
                            	@csrf
                                <input type="text" placeholder="Name" name="customer_name">
                                <input type="email" placeholder="Email" name="customer_email">
                                <input type="password" placeholder="password" name="password">
                                <input type="text" placeholder="Mobile Number" name="phone">                                            
                                <button type="submit" class="site-btn">Signup</button>
                            </form>
                        </div>
                 </div>
        </div>
    </div>
</section>

	

@endsection