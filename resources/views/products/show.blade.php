@extends('layouts.app')
@section('content')

@include('_partials.top_banner')




<div class="container-fluid mt-1">
    <div>
        <product-show :attributes="{{ $attributes }}"  :product="{{ $product}}" />
    </div>
    @if ( optional($product)->related_products->count() )

    <div class="products-section pt-0">
        <h3 class="bold">Related Products</h3>

        <div class="products-slider owl-carousel owl-theme dots-top">
            @foreach( $related_products as $related_product)

            <div class="product-default inner-quickview inner-icon">
                <figure>
                    <a href="{{ optional($related_product->product)->link }}">
                        <img src="{{ optional($related_product->product)->image_to_show_m }}">
                    </a>
                    @if (optional($related_product->product)->default_percentage_off)
                    <div class="label-group">
                        <span class="product-label label-sale">-{{ optional($related_product->product)->default_percentage_off }}%</span>
                    </div>
                    @endif
                    
                </figure>
                <div class="product-details text-left">
                    <div class="">
                        @if($related_product->product->brand_name)
                            <div  class="product-brand bold">
                                {{ $related_product->product->brand_name }} 
                            </div>
                        @endif

                        <div class="color--primary">
                            <a href="{{ $product->link }}">{{ $related_product->product->product_name }}</a>
                        </div>
                    </div>
                    <div class="price-box text-left mt-1">
                        @if( $related_product->product->default_discounted_price)
                            <span class="old-price">{{ $related_product->product->currency }}{{ number_format($related_product->product->converted_price)   }}</span>
                            <span class="product-price">{{ $related_product->product->currency }}{{ number_format($related_product->product->default_discounted_price)  }}</span>
                        @else
                            <span class="product-price">{{ $related_product->product->currency }}{{ number_format($related_product->product->converted_price) }}</span>
                        @endif
                    </div><!-- End .price-box -->
                </div><!-- End .product-details -->
            </div>


            @endforeach
           
        </div><!-- End .products-slider -->
    </div><!-- End .products-section -->

    @endif
    </div><!-- End .container -->

    <div class="container-fluid mt-3">
        <div class="feature-boxes-container row ">
            <div class="col-6 col-md-3">
                <div class="feature-box px-sm-5 px-md-4 mx-sm-5 mx-md-3 feature-box-simple text-center">
                    <i class="fas fa-truck"></i>

                    <div class="feature-box-content">
                        <h3 class="mb-0 pb-1">Express Delivery</h3>
                        <h5 class="m-b-3">Same day delivery within Lagos.</h5>

                        <p></p>
                    </div><!-- End .feature-box-content -->
                </div><!-- End .feature-box -->
            </div><!-- End .col-md-4 -->

            <div class="col-md-3 col-6">
                <div class="feature-box px-sm-5 px-md-4 mx-sm-5 mx-md-3 feature-box-simple text-center">
                    <i class="icon-credit-card"></i>

                    <div class="feature-box-content">
                        <h3 class="mb-0 pb-1">Secured Payment</h3>
                        <h5 class="m-b-3">Safe &amp; Fast</h5>

                        <p></p>
                    </div><!-- End .feature-box-content -->
                </div><!-- End .feature-box -->
            </div><!-- End .col-md-4 -->

       

            <div class="col-md-3 col-6">
                <div class="feature-box px-sm-5 px-md-4 mx-sm-5 mx-md-3 feature-box-simple text-center">
                    <i class="fab fa-whatsapp"></i>

                    <div class="feature-box-content">
                        <h3 class="mb-0 pb-1">WHATSAPP</h3>
                        <h5 class="m-b-3">Add us on +234 9043111111</h5>
                        <p></p>
                    </div><!-- End .feature-box-content -->
                </div><!-- End .feature-box -->
            </div><!-- End .col-md-4 -->

            <div class="col-md-3 col-6">
                <div class="feature-box px-sm-5 px-md-4 mx-sm-5 mx-md-3 feature-box-simple text-center">
                    <i class="icon-action-undo"></i>

                    <div class="feature-box-content">
                        <h3 class="mb-0 pb-1">Returns</h3>
                        <h5 class="m-b-3">Hassle free returns policy. Order with peace of mind</h5>

                        <p></p>
                    </div><!-- End .feature-box-content -->
                </div><!-- End .feature-box -->
            </div><!-- End .col-md-4 -->
        </div>

    </div>
@endsection





