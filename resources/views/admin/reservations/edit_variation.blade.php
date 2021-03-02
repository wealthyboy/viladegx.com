



@if ($reservation->rooms->count())
    @foreach($reservation->rooms as $variant)
<div  class="row p-attr mb-2 variation-panel">
    
    <div class="col-md-9 col-xs-9 col-sm-9">
    </div>
    <div class="col-md-3 col-xs-12 text-right border col-sm-12 pt-2 pb-4">
        <a href="#"   title="remove panel" class="remove-panel"><i class="fa fa-trash-o"></i> Remove</a>  |
        <a href="#"   title="open/close panel" class="open-close-panel"><i class="fa fa-plus"></i> Expand</a> 
    </div>

    <div id="variation-panel" data-id="{{ $variant->id }}"   class="hide v-panel">
        <div class="clearfix"></div>
        <div class="col-md-12">
                
            <div class="col-md-7">
                <div class="form-group label-floating is-ty">
                    <label class="control-label">Accommodation Type Name</label>
                    <input name="room_name[{{ $variant->id }}]"  required="true" value="{{ $variant->name }}" class="form-control  variation" type="text">
                    <span class="material-input"></span>
                </div>
            </div>

            <div class="col-md-5">
                <div class="form-group label-floating">
                    <label class="control-label">From Date Available</label>
                    <input name="room_avaiable_from[{{ $variant->id }}]"  required="true" value="03/0/2021" class="form-control  datepicker" type="text">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group label-floating ">
                    <label class="control-label">Price</label>
                    <input name="room_price[{{ $variant->id }}]"  required="true" value="{{ $variant->price }}" class="form-control   variation" type="number">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group label-floating ">
                    <label class="control-label">Sale Price</label>
                    <input name="room_sale_price[{{ $variant->id }}]"   value="{{ $variant->name }}"  class="form-control variation_sale_price variation" type="number">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group label-floating">
                    <label class="control-label">End Date</label>
                    <input class="form-control  datepicker pull-right" value="" name="room_sale_price_expires[{{ $variant->id }}]" id="datepicker" type="text">
                </div>
            </div>
            <div class="clearfix"></div>

            
            <div class="clearfix"></div>
            <div class="col-sm-3">
                <div class="row">
                    <div   class="col-md-12 col-sm-6 col-xs-6">
                        <div id="j-drop" class=" j-drop">
                        <input accept="image/*"  required="true" onchange="getFile(this,'room_image[{{ $variant->id }}]')" class="upload_input"   data-msg="Upload  your image" type="file"  name="img"  />
                        <div   class="upload-text hide"> 
                            <a   class="" href="#">
                                <img class="" src="/backend/img/upload_icon.png">
                                <b>Click to upload image</b> 
                            </a>
                        </div>
                        <div id="j-details"  class="j-details">
                            <div id="{{ $variant->id }}" class="j-complete">
                                <div class="j-preview">
                                    <img class="img-thumnail" src="{{ $variant->image }}">
                                    <div id="remove_image" class="remove_image remove-image">
                                        <a class="remove-image"  data-randid="{{ $variant->id }}" data-model="Room"   data-id="{{ $variant->id }}" data-url="{{ $variant->image }}" href="#">Remove</a>
                                    </div>
                                    <input type="hidden" class="file_upload_input stored_image_url" value="{{ $variant->image }}" name="edit_variation_image[{{ $variant->id }}]">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div id="j-drop"  class="j-drop">
                <input accept="image/*"   onchange="getFile(this,'room_images[{{ $variant->id }}][]')" class="upload_input"  multiple="true"   type="file" id="upload_file_input" name="product_image"  />
                    <div   class=" upload-text  {{ $variant->id }}"> 
                    <a  class="" href="#">
                        <img class="" src="/backend/img/upload_icon.png">
                        <b>Click on anywhere to upload image</b> 
                    </a>
                    </div>
                    <div id="j-details"  class="j-details"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-3 pr-5 pl-5">
            <div class="material-datatables ">
                @foreach($product_attributes as $product_attribute)
                <h4>{{ $product_attribute->name }}</h4>
                <div class="well well-sm" style="height: 50px; background-color: #fff; color: black; overflow: auto;">
                    <div class="parent" value="{{ $product_attribute->id }}">
                        @include('includes.attributes',['obj'=>$product_attribute,'space'=>'&nbsp;&nbsp;','model' => 'attributes','url' => 'attribute'])
                    </div>
                </div>
                @endforeach  
            </div>
        </div>

    </div> 
    
</div>

@endforeach
@endif












    




    
