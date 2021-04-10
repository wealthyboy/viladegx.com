<template>
    
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
                                    <a class="nav-link"        id="register-user" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">I'm new here</a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-user">
                                    <div class="product-desc-content">
                                        <form method="POST" class="login_form pl-4 pr-4 mt-3" action="/fashion/login">
                                            <!--<p class="large">Great to have you back!</p>-->
                                            <p class="form-group">
                                                <label for="username">Email address</label>
                                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                               
                                            </p>
                                            <p class="form-group">
                                                <label for="password">Password</label>
                                                <input id="password" type="password" class="form-control" name="password" required>
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <p class="form-group">
                                                    <div class="form-group-custom-control flex-grow-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="change-bill-address" value="1">
                                                            <label class="custom-control-label" for="change-bill-address">Remember Me</label>
                                                        </div><!-- End .custom-checkbox -->
                                                    </div><!-- End .form-group -->
                                                </p>
                                                <p class="form-group text-right mt-2">
                                                    <a  class="color--primary bold"  href="/password/reset">Forget your password?</a>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>

                                            <p class="form-group ">
                                                <button type="submit" id="login_form_button" data-loading="Loading" class=" ml-1 btn btn--primary btn-round btn-lg btn-block" name="login" value="Log in">Log In</button>
                                            </p>
                                            

                                        </form>
                                    </div><!-- End .product-desc-content -->
                                </div><!-- End .tab-pane -->

                                <div class="tab-pane fade fade" id="register" role="tabpanel" aria-labelledby="register-user">
                                    <div class="product-desc-content">
                                    <form method="POST" class="pl-4 pr-4 mt-3" action="/fashion/register">
                                        
                                        <div class="row ">
                                            
                                            <p class="form-group p-1 col-6">
                                                <label for="first_name">First Name</label>
                                                <input id="first_name" type="text" class="form-control" name="first_name" value="" required autofocus>
                                            </p>
                                            <p class="form-group  p-1 col-6">
                                                <label for="last_name">Last Name</label>
                                                <input id="last_name" type="text" class="form-control" name="last_name" value="" required autofocus>
                                            </p>
                                            <div class="clearfix"></div>

                                            <p class="form-group p-1 col-6">
                                                <label for="email">Email address</label>
                                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                            </p>
                                            <p class="form-group p-1 col-6">
                                                <label for="phone_number">Phone Number</label>
                                                <input id="phone_number" type="text" class="form-control" name="phone_number" value="" required autofocus>
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
                                        <p class="text-center border-top pt-5"> By registering your details, you agree with our <a class="color--primary bold" href="https://avenuemontaigne.ng/fashion/pages/terms-conditions">Terms & Conditions</a> , and <a class="color--primary bold" href="https://avenuemontaigne.ng/fashion/pages/privacy-policy">Privacy and Cookie Policy.</a> </p>

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

</template>
<script>
 
</script>

