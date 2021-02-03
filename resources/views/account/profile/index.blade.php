@extends('layouts.app')
 
@section('content')
   
<section class="sec-padding--account bg--gray">
    <div class="container">
        <div class="row">
           
            @include('account.nav')
           
            
            <div class="col-md-3">
                <h2 class="">Account</h2>

                <div class="card card-plain">
                    <div class="card-body">
                       
                    </div>
                </div>

            </div>
            <div class="col-md-5">
                <h2 class="">Account </h2>


                <div class="card card-plain">
                    <div class="card-body">
                       <form method="POST" action="">
                           @include('errors.errors')
                            
                            @csrf
                           
                           
                           
                            <div class="form-group">
                                <label for="bio">Bio</label>
                                <textarea class="form-control" id="bio" rows="10"></textarea>
                            </div>
                        
                            <p class="form-group text-right">
                                <button type="submit" class="btn btn--lg bold btn--primary" name="register" value="Log in">Submit</button>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
<!--End Contact Form & Info-->

@endsection