@extends('fashion.layouts.app')
@section('content')

@include('fashion._partials.top_banner')

<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="icon-home"></i></a></li>
            <li class="breadcrumb-item bold"><a href="/products/{{ $category->slug }}"><small>{{ title_case($category->name) }}</small></a></li>
            <li class="breadcrumb-item active" aria-current="page"><small>{{ $product->name }}</small></li>
        </ol>
    </div>
</nav>

<svg class="e6iqrxh0 css-11mme3r-Icon"><use xlink:href="#iconLoaded-starFill">

   <symbol data-icon-id="starFill" data-icon-set="farfetch-2020" id="iconLoaded-starFill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2l2.868 6.922L22 9.844l-5.11 4.804L18.225 22 12 18.322 5.776 22l1.333-7.352L2 9.844l7.132-.922z"></path></svg></symbol>
</use></svg>

<svg class="eh6lylo0 css-1dupl03-Icon"><use xlink:href="#iconLoaded-star">
<symbol data-icon-id="star" data-icon-set="farfetch-2020" id="iconLoaded-star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2l2.868 6.922L22 9.844l-5.11 4.804L18.225 22 12 18.322 5.776 22l1.333-7.352L2 9.844l7.132-.922L12 2zm-1.49 8.816l-3.976.513 2.733 2.57-.745 4.11L12 15.955l3.478 2.056-.745-4.111 2.733-2.57-3.975-.514L12 7.219l-1.49 3.598z"></path></svg></symbol>
</use></svg>

<div class="container-fluid">
    <div>
        <product-show :attributes="{{ $attributes }}"  :product="{{ $product}}" />
    </div>
    @if ( optional($product)->related_products->count() )

    <div class="products-section pt-0">
        <h2 class="section-title bold">Related Products</h2>

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
                <div class="product-details">
                    <h3 class="product-title">
                        <a href="{{ optional($related_product->product_variation)->link }}">{{ optional($related_product->product)->product_name }}</a>
                    </h3>
                    <div class="price-box">
                        @if (optional($related_product->product)->default_discounted_price ) 
                            <span class="old-price">{{ optional($related_product->product)->currency }}{{ number_format(optional($related_product->product)->converted_price)  }}</span>
                            <span class="product-price">{{ optional($related_product->product)->currency }}{{ number_format(optional($related_product->product)->default_discounted_price)  }}</span>
                        @else
                           <span class="product-price">{{ optional($related_product->product)->currency }}{{ number_format(optional($related_product->product)->converted_price)  }}</span>
                        @endif
                    </div><!-- End .price-box -->
                </div><!-- End .product-details -->
            </div>


            @endforeach
           
        </div><!-- End .products-slider -->
    </div><!-- End .products-section -->

    @endif
    </div><!-- End .container -->
@endsection





