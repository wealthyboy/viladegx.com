@extends('layouts.app')
 
@section('content')
   
<section class="sec-padding--account bg--gray">
    <div class="container">
        <div class="row">
           
            @include('account.nav')
            
            <div class="col-md-9">
                <div class="row">
                   <div class="col-6">
                      <h2 class="">Products</h2>
                   </div>
                   <div class="col-6 text-right">
                       <a class="btn color--primary l-f1  p-3 border " href="/products/create"> Add Product</a>
                    </div>

                </div>
                <div class="card">
                   <div  class="card-body">
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Form & Info-->

@endsection