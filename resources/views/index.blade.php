@extends('layouts.app')

@section('content')

@include('_partials.top_banner')


@if ($sliders->count())
    <div class="owl-carousel main-banner-slider owl-theme">
        @foreach($sliders as $slider)
            <div class="item">
                <a href="{{ $slider->link }}"><img src="{{ $slider->image }}" /></a>
            </div>
        @endforeach
    </div>
@endif

<div class="container-fluid d-none d-lg-block">
    <div class="row p-3 text--gray">
        <div class="col-md-4  border-right col-4 text-center">
         <span>
            <svg
                width="24"
                height="24"
                >
                <use xlink:href="#icon-boxReturn"></use>
            </svg> 
         </span>  
         <span class="color--gray">
            Hassel free returns
         </span>
        </div>
        <div class="col-md-4 col-12  border-right color--gray text-center">
            <span>
                <svg
                    width="24"
                    height="24"
                    >
                    <use xlink:href="#icon-van"></use>
                </svg> 
            </span> 
            Fast Shipping
        </div>
        <div class="col-md-4  col-4  color--gray  text-center">
           <span>
                <svg
                    width="24"
                    height="24"
                    >
                    <use xlink:href="#icon-van"></use>
                </svg> 
           </span>
           International Shipping
        </div>
    </div>
</div>

<div class="container-fliud mt-1">
    <div  class="row align-items-start">
        @foreach( $banners as $banner )
            <div data-title="{{ $banner->title }}" class="{{ $banner->col }} {{ $banner->col == 'col-lg-3' ?  'col-6    p-0' : 'pr-1 pl-1' }}  mb-1 {{ $banner->title }} p-0 text-center">
                <div class="banner-box">
                    <a class="portfolio-thumb" href="{{ $banner->link }}">
                        <img src="{{ $banner->image }}" alt="shop {{ $banner->title }}" />
                    </a>
                </div>
                <div class="shop-title text-center  position-absolute">
                    <h1 class="title color--light">{{ $banner->title }}</h1>
                    <a href="{{ $banner->link }}" class="btn btn-block btn-sm btn-primary text--light bold">Shop Now</a>
                </div>
            </div> 
        @endforeach
    </div>
</div>

<div class="container-fluid d-block d-sm-none">
    <div class="row p-3 text--gray">
        <div class="col-md-4 p-4 border-bottom col-12 text-left">
         <span>
            <svg
                width="24"
                height="24"
                >
                <use xlink:href="#icon-boxReturn"></use>
            </svg> 
         </span>  
         <span class="color--gray">
            Hassel free returns
         </span>
        </div>
        <div class="col-md-4 col-12 p-4 border-bottom  color--gray text-left">
            <span>
                <svg
                    width="24"
                    height="24"
                    >
                    <use xlink:href="#icon-van"></use>
                </svg> 
            </span> 
            Fast Shipping
        </div>
        <div class="col-md-4  col-12  p-4 color--gray  text-left">
           <span>
                <svg
                    width="24"
                    height="24"
                    >
                    <use xlink:href="#icon-van"></use>
                </svg> 
           </span>
           International Shipping
        </div>
    </div>
</div>






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


