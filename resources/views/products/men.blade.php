   <div  class="row"> 
        <div data-title="" class="col-lg-6 col-12 pr-1 pl-1 mt-3  mb-1  p-0 text-center">
            <div class="banner-box">
                <a class="portfolio-thumb" href="">
                    <img src="/images/banners/dffcd12193c823e232d3c4eeea29586a.png" alt="shop " />
                </a>
                <div class="text-left d-block d-sm-none p-3">
                <h1 class="title text-uppercase">Sale: get up to 50% off now</h1>
                <p class="color--primary" >The greatest selection of sale pieces from the world’s best designers</p>
                <a href="" class="btn   btn-outline btn-sm   bold">Shop Now</a>
            </div>
            </div>
        </div> 
        <div data-title="" class="col-lg-6 d-none d-lg-block col-12 pr-1 pl-1  mb-1  p-0">
            <div class="shop-title-center text-center p-3">
                <h1 class="title text-uppercase">Sale: get up to 50% off now</h1>
                <p class="color--primary" >The greatest selection of sale pieces from the world’s best designers</p>
                <a href="" class="btn   btn-outline btn-sm   bold">Shop Now</a>
            </div>
        </div> 
    </div>


    @if ( $f_products->count() )
    <div class="container-fluid mt-1 ">
        <div class="products-section pt-0">
            <div class=" text-center fa-2x">Best of sale: shop our editor's picks</div>
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


    <div  class="row">
        <div data-title="" class="col-lg-6 d-none d-lg-block col-12 pr-1 pl-1  mb-1  p-0  ">
            <div class="shop-title-center   text-center text-uppercase p-3">
                <h1 class="title">Active wear</h1>
                <p class=" color--primary">If the last year taught our wardrobes anything, it’s that it is possible to be productive in the track pants you wore to exercise in. But if you’ve missed getting properly ‘dressed’, meet the happy medium: around-the-clock activewear</p>
                <a href="" class="btn   btn-outline btn-sm   bold">Shop Now</a>
            </div>
        </div> 
        <div data-title="" class="col-lg-6 col-12 pr-1 pl-1  mb-1  p-0 text-center">
            <div class="banner-box">
                <a class="portfolio-thumb" href="">
                    <img src="/images/banners/8b9b16d3f9ebb77ed1bc6f442633f4a3.jpg" alt="shop " />
                    <div class="d-block d-sm-none  text-left text-uppercase p-3">
                        <h1 class="title">Active wear</h1>
                        <p class=" color--primary">If the last year taught our wardrobes anything, it’s that it is possible to be productive in the track pants you wore to exercise in. But if you’ve missed getting properly ‘dressed’, meet the happy medium: around-the-clock activewear</p>
                        <a href="" class="btn   btn-outline btn-sm   bold">Shop Now</a>
                    </div>
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
            <div class="shop-title text-center  position-absolute">
                <h3 class="title color--light">MAISON MARGIELA</h3>
                <a href="e" class="btn  btn-sm btn-primary text--light bold">Shop Now</a>
            </div>
        </div> 
        <div data-title="" class="col-lg-6 col-12 pr-1 pl-1  mb-1  p-0 text-left">
            <div class="banner-box">
                <a class="portfolio-thumb" href="">
                    <img src="/images/banners/4dca097abe664379fca072af888532f9.jpg" alt="shop " />
                    <h3 class="m-0">UP YOUR SKIWEAR GAME</h3>
                    <p>
                       Get ready for the slopes with our curation of the season’s best ski brands, including Moncler Grenoble, Holden and more
                    </p>
                </a>
            </div>
        </div>
    </div>

<!-- 
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
   </section> -->