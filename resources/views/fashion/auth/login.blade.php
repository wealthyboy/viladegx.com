@extends('fashion.layouts.auth')
 
@section('content')
   
 <!--Content-->
    <section class="sec-padding bg--gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="ml-1 col-md-6  bg--light mr-1">
                    <div class=" mt-4 mb-4">
                                
                        <div class="product-single-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="login-user" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-user" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">I'm new here</a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-user">
                                    <div class="product-desc-content">
                                        @include('fashion._partials.login')
                                    </div><!-- End .product-desc-content -->
                                </div><!-- End .tab-pane -->

                                <div class="tab-pane fade fade" id="register" role="tabpanel" aria-labelledby="register-user">
                                    <div class="product-desc-content">
                                    <form method="POST" class="pl-4 pr-4 mt-3" action="/fashion/register">
                                        @if ($errors->any() )
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach($errors->all()  as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        
                                        <div class="row ">
                                            @csrf
                                            <p class="form-group p-1 col-6">
                                                <label for="first_name">First Name</label>
                                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>
                                            </p>
                                            <p class="form-group  p-1 col-6">
                                                <label for="last_name">Last Name</label>
                                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>
                                            </p>
                                            <div class="clearfix"></div>

                                            <p class="form-group p-1 col-6">
                                                <label for="email">Email address</label>
                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                            </p>
                                            <p class="form-group p-1 col-6">
                                                <label for="phone_number">Phone Number</label>
                                                <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required autofocus>
                                            </p>
                                            <div class="clearfix"></div>

                                            <p class="form-group p-1 col-6">
                                                <label for="password">Password</label>
                                                <input id="password" type="password" class="form-control" name="password" required>
                                            </p>
                                            <p class="form-group p-1 col-6">
                                                <label for="password">Confirm Password</label>
                                                <input id="password" type="password" class="form-control" name="password_confirmation" required>
                                            </p>
                                            <div class="clearfix"></div>
                                            <p class="form-group text-right col-12 mt-2">
                                                <button type="submit" class="btn btn-lg btn-block btn--primary ml-1 bold" name="register" value="Log in">Register</button>
                                            </p>
                                        
                                        </div>
                                        <p class="text-center border-top pt-5"> By registering your details, you agree with our <a class="color--primary bold" href="https://ohram.org/pages/terms-conditions">Terms & Conditions</a> , and <a class="color--primary bold" href="https://ohram.org/pages/privacy-policy">Privacy and Cookie Policy.</a> </p>

                                    </form>

                                    </div><!-- End .product-desc-content -->
                                </div><!-- End .tab-pane -->

                                
                            </div><!-- End .tab-content -->
                        </div><!-- End .product-single-tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--End Content-->
@endsection
