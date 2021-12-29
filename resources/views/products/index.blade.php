


@extends('layouts.app')
 
@section('content')

@if($use_subcategory =true)
<div class="container">
    <div  class="row align-items-start">
        <div data-title="" class="col-lg-6 col-12 pr-1 pl-1  mb-1  p-0 text-center">
            <div class="banner-box">
                <a class="portfolio-thumb" href="">
                    <img src="/images/banners/dffcd12193c823e232d3c4eeea29586a.png" alt="shop " />
                </a>
            </div>
            
        </div> 

        <div data-title="" class="col-lg-6 col-12 pr-1 pl-1  mb-1  p-0  d-flex justify-content-center align-items-center">
            <div class="shop-title text-center">
                <h1 class="title">Sale: get up to 50% off now</h1>
                <p class="title">The greatest selection of sale pieces from the world’s best designers — only on AM</p>
                <a href="" class="btn   btn-outline btn-sm   bold">Shop Now</a>
            </div>
        </div> 
    </div>


    @if ( $f_products->count() )
    <div class="container-fluid mt-5 mb-5">
        <div class="products-section pt-0">
            <h2 class="section-title bold text-center">Most Sorted</h2>
            <div class="products-slider owl-carousel owl-theme dots-top">
                @foreach( $f_products as $featered_product)
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="{{ $featered_product->link }}">
                            <img src="{{ $featered_product->image_to_show_m }}">
                        </a>
                    </figure>
                    <div class="product-details text-left">
                        <div class="">
                            
                            @if($featered_product->colours->count()  && $featered_product->colours->count() > 1)
                                <div  class="justify-content-center d-flex mb-1">
                                    @foreach($featered_product->colours as $color)
                                    <div   style="border:1px solid #222; height: 15px; width: 15px; border-radius: 50%; background-color: {{ $color->color_code }};" class="mr-1"></div>
                                    @endforeach
                                </div>
                            @endif
                            @if($featered_product->brand_name)
                                <div  class="product-brand bold">
                                    {{ $featered_product->brand_name }} 
                                </div>
                            @endif

                            <div class="color--primary">
                                <a href="{{ $featered_product->link }}">{{ $featered_product->product_name }}</a>
                            </div>
                        </div>
                        <div class="price-box mt-1">
                            @if( $featered_product->default_discounted_price)
                                <span class="old-price">{{ $featered_product->currency }}{{ number_format($featered_product->converted_price)   }}</span>
                                <span class="product-price  ml-1">
                                    |
                                    @if( $featered_product->default_percentage_off )
                                        {{ $featered_product->default_percentage_off }}% OFF
                                    @endif
                                    <span class="text-danger">
                                    {{ $featered_product->currency }}{{ number_format($featered_product->default_discounted_price)  }}
                                    </span>
                                </span>
                            @else
                                <span class="product-price">{{ $featered_product->currency }}{{ number_format($featered_product->converted_price) }}</span>
                            @endif
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>


                @endforeach
            
            </div><!-- End .products-slider -->
        </div><!-- End .products-section -->

    </div><!-- End .container -->
    @endif


    <div  class="row align-items-start">
        <div data-title="" class="col-lg-6 col-12 pr-1 pl-1  mb-1  p-0  d-flex justify-content-center align-items-center">
            <div class="shop-title text-center">
                <h1 class="title">Sale: get up to 50% off now</h1>
                <p class="title">The greatest selection of sale pieces from the world’s best designers — only on AM</p>
                <a href="" class="btn   btn-outline btn-sm   bold">Shop Now</a>
            </div>
        </div> 
        <div data-title="" class="col-lg-6 col-12 pr-1 pl-1  mb-1  p-0 text-center">
            <div class="banner-box">
                <a class="portfolio-thumb" href="">
                    <img src="/images/banners/8b9b16d3f9ebb77ed1bc6f442633f4a3.jpg" alt="shop " />
                </a>
            </div>
            
        </div> 
    </div>

    <div  class="row align-items-start">
        <div data-title="" class="col-lg-6 col-12 pr-1 pl-1  mb-1  p-0 text-center">
            <div class="banner-box">
                <a class="portfolio-thumb" href="">
                    <img src="/images/banners/16864757_33783141_600.jpg" alt="shop " />
                </a>
            </div>
        </div> 
        <div data-title="" class="col-lg-6 col-12 pr-1 pl-1  mb-1  p-0 text-center">
            <div class="banner-box">
                <a class="portfolio-thumb" href="">
                    <img src="/images/banners/4dca097abe664379fca072af888532f9.jpg" alt="shop " />
                </a>
            </div>
        </div>
    </div>


   <section  class="explore-cities mb-3">
      <div class="row">
         
         <div class="col-md-12 pt-5 pb-4">
            <div class="owl-carousel svg-arrows owl-them">
               <div class="item position-relative ">
                  <a href="#">
                     <img src="" alt="" class="img-raised  ">
                  </a>
                  <div class="position-absolute  bottom-0 location-name">
                     <a href="#">
                       <h4 class="text-white  ml-3 bold"></h4>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>




@else

<section class="breadcrumb no-banner  justify-content-center">
    <div class="breadcrumb-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12  text-center border-bottom">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav breadcrumb-link">
                        <div class="container d-flex justify-content-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb }}</li>
                            </ol>
                        </div>
                    </nav>
                    <h2 class="breadcrumb-title"> DESIGNER {{ $breadcrumb }} FOR  {{ $parent_category }}</h2>
                    <div class="category-description-section d-flex">
                        <p class="text-left category-description"> {{ isset($category) ? $category->description : '' }} </p>
                        <a  class="read-more" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="container-fluid mb-3">
    <div  class="row">
        
       @if ( isset($category) &&  isset($category_attributes) && $category_attributes->count() )
            <div class="col-lg-9 main-content">
                <div class="product-overlay d-none">
                    <div class="loading">
                        <div class="loader"></div>
                    </div>
                </div>
       @else
            <div class="col-lg-12 main-content">
        @endif
        @if ($products->count())
            <nav class="toolbox horizontal-filter filter-sorts">
                <div class="toolbox-left">
                    <div class="toolbox-item toolbox-sort pr-1">
                        <label class="ml-3"></label>
                    </div><!-- End .toolbox-item -->
                </div><!-- End .toolbox-left -->


                <div class="toolbox-right">
                   <div class="select-custom">
                        <select  name="sort_by" id="sort_by" class="form-control bold">
                            <option value="" selected="selected">Sort By</option>
                            <option value="created_at,asc">Oldest</option>
                            <option value="created_at,desc">Newest</option>
                            <option value="price,asc">Lowest Price</option>
                            <option value="price,desc">Highest Price</option>
                        </select>
                    </div><!-- End .select-custom -->

                </div><!-- End .toolbox-right -->
            </nav>
        @endif
            @if ( isset($category) &&  isset($category_attributes) && !empty($category_attributes) )
                @include('_partials.products',['no_attr'=>false])
            @else
                @include('_partials.products',['no_attr' => true])
            @endif

            <div id="pagination" class="col-md-10 text-center mb-20 col-md-offset-1">
                @if(!empty($products->hasMorePages()))
                <a href="{{ $products->nextPageUrl() }}" id="load_more" class="btn loadmore btn-loadmore load_more mt-4 mb-2">
                   <span class="spinner-grow spinner-grow-md d-none"></span>
                   Load More...
                </a>
                @endif
            </div>

        </div><!-- End .col-lg-9 -->

        
        @if ($products->count())
            @if ( isset($category) &&  isset($category_attributes) && $category_attributes->count()  )
                <div class="sidebar-overlay"></div>
                <div class="sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
                <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                    <div class="pin-wrapper" style="">
                        <div class="sidebar-wrapper" style="">
                            @include('_partials.search',['category_attributes'=>$category_attributes])
                        </div>
                    </div>
                </aside><!-- End .col-lg-3 -->
            @endif
        @endif
    </div><!-- End .row -->
    <form>
        <input type="hidden" name="sort_by" id="sort" />
    </form>

</div>

@endif
@endsection
@section('inline-scripts')
    $(document).ready(function() {
        $("#load-products").loadProducts({
           'form':$('form#collections input'),
           'form_data':$("form#collections"),
           'form_sort_by':$("select#sort_by"),
           'target':'load-products',
           'loggedInStatus':8,
           'load_more':$(document).find('a.load_more'),
           'filter_url':'{{ request()->fullUrl() }}',
           'overlay': '.product-overlay'
        });
   
        //reset form
        $("#reset-search-form").on("click", function () {
           //  Reset all selections fields to default option.          
           $('input[type=checkbox]').each(function () {
               this.checked = false;
           }); 
        });  
        
        $(".read-more").on('click',function(e){
            e.preventDefault();
            if( $('.category-description').hasClass("open") ) {
               $('.category-description').removeClass('open').css('white-space', 'nowrap')
            } else {
               $('.category-description').addClass('open').css('white-space', 'normal')
            }
        })
   });
   
@stop


