@extends('fashion.layouts.app')

@section('content')

<div class="top-notice text-white bg--gray mt-5">
    <div class="container-fluid text-center">
        <div class="row">
            
            <div class="col-12">
                <h5 class="d-inline-block text-uppercase mb-0">
                    Incoming | <a href="#">Shop the latest arrivals here</a>
                </h5>
            </div>

        </div>
        
    </div><!-- End .container -->
</div>

<div class="container-fliud mt-3">
    <div  class="row align-items-start ">
        @foreach( $banners as $banner )
            <div data-title="{{ $banner->title }}" class="{{ $banner->col }} {{ $banner->col == 'col-lg-3' ?  'col-6    p-0' : 'pr-1 pl-1' }}  mb-1 {{ $banner->title }} p-0 text-center">
                <div class="banner-box">
                    <a class="portfolio-thumb" href="{{ $banner->link }}">
                        <img src="{{ $banner->image }}" alt="" />
                    </a>
                </div>
            </div> 
        @endforeach
    </div>
</div>

<div class="container-fluid">
    
    @if ( $products->count() )

    <div class="products-section pt-0">
        <h2 class="section-title bold">Related Products</h2>

        <div class="products-slider owl-carousel owl-theme dots-top">
            @foreach( $products as $feautered_product)

            <div class="product-default inner-quickview inner-icon">
                <figure>
                    <a href="{{ $feautered_product->link }}">
                        <img src="{{ $feautered_product->image_to_show_m }}">
                    </a>
                    @if( $feautered_product->default_percentage_off )
                    <div class="label-group">
                        <span class="product-label label-sale">-{{ $feautered_product->default_percentage_off }}%</span>
                    </div>
                    @endif
                    
                </figure>
                <div class="product-details">
                    <h3 class="product-title">
                        <a href="{{ $feautered_product->link }}">{{ $feautered_product->product_name }}</a>
                    </h3>
                    <div class="price-box">
                        @if ( $feautered_product->default_discounted_price ) 
                            <span class="old-price">{{ $feautered_product->currency }}{{ number_format($feautered_product->converted_price)  }}</span>
                            <span class="product-price">{{ $feautered_product->currency }}{{ number_format($feautered_product->default_discounted_price)  }}</span>
                        @else
                           <span class="product-price">{{ $feautered_product->currency }}{{ number_format($feautered_product->converted_price)  }}</span>
                        @endif
                    </div><!-- End .price-box -->
                </div><!-- End .product-details -->
            </div>


            @endforeach
           
        </div><!-- End .products-slider -->
    </div><!-- End .products-section -->

    @endif
    </div><!-- End .container -->



<!--End Portfolio-->
    <!--End Categories-->
    @if ($posts->count()) 

    <!--Blog-->
    <section class="pb-4 pt-4 bg--primary mb-1">
        <div class="container">
            <div class="page-head">
                <span class="page-sub-title"></span>
                <h2 class="page-title  heading-hr-margin-white">BLOG</h2>
            </div>
        </div>
       <div class="container">
            <div class="blog-slider owl-carousel owl-theme text-center">
                 @foreach($posts as $post)
                    <!--Item-->
                    <div class="item raised animated fadeIn  bg--light mb-4">
                        <div class="blog-item">
                            <div class="blog-item-image">
                                <a title="{{  $post->title }}" href="{{ route('blog.show',['blog'=> $post->slug]) }}" class="blog-img-link">
                                    <img  title="{{  $post->title }}" src="{{ $post->image }}" alt="{{  $post->title }}" />
                                </a>
                            </div>
                            <div class="blog-item-content">
                                <p class="info mb-2">
                                    <i class="fa fa-clock-o"></i><span>{{ $post->created_at->diffForHumans() }}</span>
                                </p>
                                <div class="tag bold">
                                    @foreach($post->attributes as $tag)
                                    <a href="/blog/tag/{{ $tag->id }}"><i class="fa fa-tags"></i> {{ $tag->name }}</a>
                                    @endforeach
                                </div>
                                <h6 class="blog-title text-uppercase"> 
                                    <a title="{{  $post->title }}" href="{{ route('blog.show',['blog'=> $post->slug]) }}" class="">
                                        {{ $post->title }}
                                    </a> 
                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
               
            </div>
        </div>
    </section>
    <!--End Blog-->
    @endif

@endsection
@section('page-scripts')
@stop


