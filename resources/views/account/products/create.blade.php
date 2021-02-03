@extends('layouts.auth')
 
@section('content')
<section class="sec-padding bg--gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10  bg--light p-4">
                @include('includes.success')
                @include('errors.errors')

                <div class=" mt-4 mb-4">
                    <form action="{{ route('products.store') }}" id="sell-form" method="POST">
                        @csrf
                        <div class="container  mt-3">
                            <h1> SELL YOUR ITEMS</h1>
                            <div id="items-section"></div>
                                <h4 class="sell-title">ADD A NEW ITEM</h4>
                                  <div class="row border-bottom pb-5 mb-3">
                                       
                                    <div class="col-lg-12 col-md-12 files" id="">
                                        <div class="row">
                                            <div  class="col-md-12  text-center">
                                                <p class="description text">Click on anywhere below to upload image </p>
                                            </div>
                                                <div class="col-sm-3">
                                                    <div class="row">
                                                        <div  class="  text-center">
                                                        </div>
                                                        <div   class="col-md-12 col-sm-6 col-xs-6">
                                                        <div id="j-drop" class=" j-drop">
                                                            <input accept="image/*"  required="true" onchange="getFile(this,'image','Product',false)" class="upload_input"   data-msg="Upload  your image" type="file"  name="img"  />
                                                            <div   class=" upload-text"> 
                                                                <a   class="" href="#">
                                                                    <img class="" src="/backend/img/upload_icon.png">
                                                                    <b>Click to upload image</b> 
                                                                </a>
                                                            </div>
                                                            <div id="j-details"  class="j-details">
                                                                
                                                            </div>

                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="row">
                                                        <div   class="col-md-12 col-sm-6 col-xs-6">
                                                        <div id="j-drop" class=" j-drop">
                                                            <input accept="image/*"   onchange="getFile(this,'images[]')" class="upload_input" multiple="true"  data-msg="Upload  your image" type="file"  name="pimages"  />
                                                            <div   class=" upload-text"> 
                                                                <a   class="" href="#">
                                                                    <img class="" src="/backend/img/upload_icon.png">
                                                                    <b>Click on anywhere to upload image</b> 
                                                                </a>
                                                            </div>
                                                            <div id="j-details"  class="j-details">
                                                                
                                                            </div>

                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                
                            
                                        </div>
                                    </div>
                                 <div class="row border-bottom pb-5">
                                    <div class="col-lg-2 col-md-2">
                                        <p class="category-label"> What will you like to sell</p>
                                        <p> Enter details about your item</p>
                                    </div>  
                                    <div class="col-lg-7 col-md-7">
                                        <div class="row">
                                            <p class="form-field-wrapper col-md-8">
                                                <label for="designer">Title&nbsp;<abbr title="required">*</abbr></label>
                                                <input class="form-control required" name="title" id="title" placeholder="" value="" type="text">
                                            </p>
                                                
                                                
                                            <p class="form-field-wrapper col-md-4 select-custom">
                                                <label for="category_id">Category<abbr title="required">*</abbr></label>
                                                <select name="category_id" id="category_id" class="form-control input--lg required" autocomplete="category" tabindex="-1" aria-hidden="true">
                                                    <option value="" selected> Choose Category </option>
                                                    @foreach($categories as $category)
                                                        <optgroup label="{{ $category->name }}">
                                                            @if ( $category->children->count() )
                                                                @foreach (  $category->children as $children)
                                                                   <option  value="{{ $children->id }}" >{{ $children->name }} </option>
                                                                @endforeach
                                                            @endif 
                                                        </optgroup>
                                                    @endforeach

                                                            
                                                </select>
                                            </p>

                                            <p class="form-field-wrapper col-sm-12">
                                                <label for="description">Describe this item<abbr title="required">*</abbr></label>
                                                <textarea name="description" class="form-control input--lg required" id="description"></textarea> 
                                            </p>
                                        </div>
                                        
                                        
                                                                              
                                    </div>
                                    <div class="col-lg-3 col-md-3 how-to-sell">
                                        <h6> How to Sell FAQs</h6>
                                        <ul>
                                            <li> Provide the best pictures possible </li>
                                            <li> Describe your item accurately </li>
                                        </ul>
                                    </div>
                                </div>

                                

                                    <div class="row border-bottom pb-5 pt-5">
                                        <div class="col-lg-2 col-md-2">
                                            <p class="category-label"> OTHER DETAILS</p>
                                            <p> Tell us about the condition of your item</p>
                                        </div>
                                        <div class="col-md-7 col-md-7">
                                            <div class="row">
                                                <p class="form-field-wrapper col-md-12 select-custom">
                                                    <label for="subject">Subjects<abbr title="required">*</abbr></label>
                                                    <select name="subject_id" id="subject" class="form-control  required" autocomplete="subject" tabindex="-1" aria-hidden="true">
                                                        <option value="">Choose Subject</option>
                                                        @foreach($subjects as $subject)
                                                           <option value="{{ $subject->id }}"> {{ $subject->name }} </option>
                                                        @endforeach
                                                    </select>
                                                </p>
                                            </div> 

                                            <div class="row">
                                                <p class="form-field-wrapper col-md-4  select-custom">
                                                    <label for="mediums"> Mediums <abbr title="required">*</abbr></label>
                                                    <select name="mediums[{{ $medium->id }}]" id="mediums" class="form-control required">
                                                        <option value="">Choose Mediums</option>
                                                        @foreach($medium->children as $medium)
                                                           <option value="{{ $medium->id }}"> {{ $medium->name }} </option>
                                                        @endforeach
                                                        
                                                    </select>
                                                </p>
                                                <p class="form-field-wrapper col-md-4 select-custom">
                                                    <label for="materials">Materials <abbr title="required">*</abbr></label>
                                                    <select name="materials[{{ $material->id }}]" id="materials" class="form-control  required">
                                                        <option value="" selected>Choose Material</option>
                                                        @foreach($material->children as $material)
                                                           <option value="{{ $material->id }}"> {{ $material->name }} </option>
                                                        @endforeach
                                                        
                                                    </select>
                                                </p>
                                                <p class="form-field-wrapper col-md-4 select-custom ">
                                                    <label for="styles"> Styles <abbr title="required">*</abbr></label>
                                                    <select name="styles[{{ $style->id }}]" id="styles" class="form-control required">
                                                        <option value="" selected>Choose Styles</option>
                                                        @foreach($style->children as $style)
                                                           <option value="{{ $style->id }}"> {{ $style->name }} </option>
                                                        @endforeach
                                                    </select>
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row pt-5 pb-5">
                                        <div class="col-lg-2 col-md-2">
                                            <p class="category-label"> DIMENSIONS</p>
                                            <p> Provide accurate dimensions as collectors need to know the exact size of an artwork before purchasing it. </p>
                                        </div>
                                        <div class="col-md-7 col-md-7">
                                            <div class="row">
                                                <p class="form-field-wrapper col-md-3">
                                                    <label for="weight">Weight<abbr title="required">*</abbr></label>
                                                    <input class="form-control required" name="weight" id="weight" placeholder="" value="" type="text">
                                                </p>
                                                <p class="form-field-wrapper col-md-3">
                                                    <label for="height">Height<abbr title="required">*</abbr></label>
                                                    <input class="form-control required" name="height" id="height" placeholder="" value="" type="text">
                                                </p>
                                                <p class="form-field-wrapper col-md-3">
                                                    <label for="width">Width<abbr title="required">*</abbr></label>
                                                    <input class="form-control required" name="width" id="width" placeholder="" value="" type="text">
                                                </p>
                                                <p class="form-field-wrapper col-md-3">
                                                    <label for="inches">Inches<abbr title="required">*</abbr></label>
                                                    <input class="form-control required" name="inches" id="inches" placeholder="" value="" type="text">
                                                </p>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="row border-top  pb-5 pt-5">
                                        <div class="col-lg-2 col-md-2">
                                            <p class="category-label">PACKGING</p>
                                            <p>  Describe how you will package your item </p>
                                        </div>
                                        <div class="col-md-7 col-md-7">
                                            <div class="row">
                                                <p class="form-field-wrapper col-sm-12 item-additions"> 
                                                    <span>  </span>
                                                    <label class="radio-container">
                                                        <input type="radio" name="packaging" value="crate">
                                                        <span class="checkmark"> Crate </span>
                                                    </label>
                                                    <label class="radio-container">
                                                        <input type="radio" name="packaging" value="box">
                                                        <span class="checkmark">Box</span>
                                                    </label>
                                                    <label class="radio-container">
                                                        <input type="radio" name="packaging" value="tube">
                                                        <span class="checkmark">Tube</span>
                                                    </label>
                                                    
                                                </p>
                                            </div> 

                                        </div>
                                    </div>

                                    <div class="row border-top pb-5 pt-5">
                                        <div class="col-lg-2 col-md-2">
                                            <p class="category-label">PRICING</p>
                                            <p></p>
                                        </div>
                                        <div class="col-md-7 col-md-7">
                                            <div class="row">
                                                <p class="form-field-wrapper col-md-6">
                                                    <label for="price">Price<abbr title="required">*</abbr></label>
                                                    <input class="form-control required" name="price" id="price" placeholder="" value="" type="text">
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                   

                                    <div class="row border-top">
                                        <div class="col-md-12"> 
                                            <div class="form-field-wrapper mt-5 text-right">
                                                <button type="submit" class="btn btn--lg btn--secondary" id="add-new-item">Submit</button>
                                            </div>
                                        </div>
                                    </div>

                            
                             </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Content-->
@endsection
@section('page-scripts')
   <script src="{{ asset('js/uploader.js') }}"></script>
@stop
