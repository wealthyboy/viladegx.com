@if ($products->count())

@foreach($products as $product)


<div  class="col-6   col-md-4">
    <div class="product-default inner-quickview inner-icon">
        <figure>
            <a href="{{ optional($product)->link }}">
                <img src="{{ $product->image }}" alt="{{ $product->product_name }}" />
            </a>
            <div class="btn-icon-group"></div>
        </figure>
        
        <div class="product-details">
            <div class="">
                
                <div  class="product-brand">
                    {{ $product->title }}
                    <br>
                </div>
                
                <div class=" d-lg-flex d-xl-flex color--primary">
                    <div class="text-left  mr-5">
                        <a href="{{ $product->link }}">From Photos |</a>
                        <small>
                            <span class="product-price bold">{{ $product->currency }}{{ number_format($product->converted_price)}}</span>
                        </small>
                    </div> 
                    <div class="text-left">
                    </div><!-- End .price-box -->
                </div>
            </div>
        </div><!-- End .product-details -->
    </div>

</div><!-- End .col-sm-4 -->
@endforeach

@else
    <div class="col-12 d-flex justify-content-center">
        <div class="text-center pb-3">
            <img  width="200" height="200" src="/images/utilities/empty_product.svg" /> 
            <p class="bold">No products found</p>
        </div>
    </div>
@endif

   

