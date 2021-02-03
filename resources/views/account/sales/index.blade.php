@extends('layouts.app')
 
@section('content')
<section class="sec-padding--account bg--gray">
    <div class="container">
        <div class="row">
                
            @include('account.nav')
                
            <div class="col-md-9">
                <h2 class="">Sales </h2>
                <div class="card card-plain">
                    <div class="card-body">
                      @if ($sales->count() )
                        <div class="table-responsive  bg--light ">
                            <table  id="" class="table table-shopping table-striped">
                                <thead>
                                    <tr>
                                        <td class="text-left bold text-uppercase">Order ID</td>
                                        <td class="text-left bold">CUSTOMER</td>
                                        <td class="text-left bold">DATE ADDED</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td class="text-left">#{{ $order->id }}</td>
                                        <td class="text-left">{{ Auth::user()->fullname() }}</td>
                                        <td class="text-left">{{ $order->created_at->format('d/m/y') }}</td>
                                        <td class="text-right"><a href="/order/{{ $order->id}}"  class=" p-5"><i class="fa fa-eye"></i> view</a></td>
                                    </tr>
                                    @endforeach
                                        
                                </tbody>
                            </table>
                        </div> 
                        @else
                        <div class="col-12 d-flex justify-content-center">
                            <div class="text-center pb-3">
                                <img  width="200" height="200" src="/images/utilities/shopping-cart-empty-side-view.svg" /> 
                                <p class="bold">No sales yet </p>
                            </div>
                        </div>
                             
                        @endif 
                    </div>
                </div>

                   
                </div>
            </div>
        </div>
    </div>
</section>
<!--End & Info-->

@endsection