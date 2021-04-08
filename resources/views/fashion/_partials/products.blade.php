<div id="load-products" class="row">

@if ($products->count())

@foreach($products as $product)
<div  class="col-6  {{ $no_attr ? 'col-md-3' : 'col-md-4' }}">
        <div class="product-default inner-quickview inner-icon">
            <figure>
                <a href="{{ $product->link }}">
                    <img src="{{ $product->image_to_show_m }}" alt="{{ $product->product_name }}" />
                </a>
               
                @if($product->default_percentage_off)
                <div class="label-group">
                    <div  class="product-label label-sale">-{{ $product->default_percentage_off }}%</div>
                </div>
                @endif
                <div  data-toggle="modal" data-target="#login-modal"  data-pid="{{ $product->id }}" class="btn-icon-group">
                   <svg class="product-wishlist-icon-fillled  d-none">
                        <use xlink:href="#iconStarFill">
                            <symbol data-icon-id="starFill" id="iconStarFill"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2l2.868 6.922L22 9.844l-5.11 4.804L18.225 22 12 18.322 5.776 22l1.333-7.352L2 9.844l7.132-.922z"></path></svg></symbol>
                        </use>
                    </svg>
                    <svg class="product-wishlist-icon"><use xlink:href="#iconStar">
                        <symbol data-icon-id="star" id="iconStar"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2l2.868 6.922L22 9.844l-5.11 4.804L18.225 22 12 18.322 5.776 22l1.333-7.352L2 9.844l7.132-.922L12 2zm-1.49 8.816l-3.976.513 2.733 2.57-.745 4.11L12 15.955l3.478 2.056-.745-4.111 2.733-2.57-3.975-.514L12 7.219l-1.49 3.598z"></path></svg></symbol>
                        </use>
                    </svg>
                </div>
                @if($product->extra_percent)
                  <a href="" class="btn-quickview" title="Quick View">Extra {{ $product->extra_percent }}% OFF</a>
                @endif
            </figure>
            <div class="product-details text-center">
                <div class="mx-auto">
                    
                    @if($product->colours->count()  && $product->colours->count() > 1)
                        <div  class="justify-content-center d-flex mb-1">
                            @foreach($product->colours as $color)
                               <div   style="border:1px solid #222; height: 15px; width: 15px; border-radius: 50%; background-color: {{ $color->color_code }};" class="mr-1"></div>
                            @endforeach
                        </div>
                    @endif
                    @if($product->brand_name)
                        <div  class="product-brand bold">
                            {{ $product->brand_name }} 
                        </div>
                    @endif

                    <div class="color--primary">
                        <a href="{{ $product->link }}">{{ $product->product_name }}</a>
                    </div>
                </div>
                <div class="price-box mx-auto mt-1">
                    @if( $product->default_discounted_price)
                        <span class="old-price">{{ $product->currency }}{{ number_format($product->converted_price)   }}</span>
                        <span class="product-price">{{ $product->currency }}{{ number_format($product->default_discounted_price)  }}</span>
                    @else
                        <span class="product-price">{{ $product->currency }}{{ number_format($product->converted_price) }}</span>
                    @endif
                </div><!-- End .price-box -->
            </div><!-- End .product-details -->
        </div>

    </div><!-- End .col-sm-4 -->

    @endforeach
    @else
        <div class="col-12 d-flex justify-content-center">
            <div class="text-center pb-3">
                <img  width="100" height="100" src="/images/utilities/search.svg" /> 
                <p class="bold">No Products Found</p>
            </div>
        </div>

    @endif
</div> 


<login-modal />
    

