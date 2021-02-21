<div style="margin-bottom: 10px;" class="row p-attr variation-panel">
    <div class="col-md-9 col-xs-9 col-sm-9">
    </div>
    <div class="col-md-3 col-xs-12 text-right col-sm-12">
        <a href="#"   title="remove panel" class="remove-panel"><i class="fa fa-trash-o"></i> Remove</a>  |
        <a href="#"   title="open/close panel" class="open-close-panel"><i class="fa fa-plus"></i> Expand</a> 
    </div>

    <div id="variation-panel" data-id="{{ $counter }}"   class="hide v-panel">
        <div class="clearfix"></div>

        <div class="col-md-8">

            <div class="col-md-7">
                <div class="form-group label-floating is-ty">
                    <label class="control-label">Room Name</label>
                    <input name="room_name[{{ $counter }}]"  required="true" value="{{ old('price') }}" class="form-control  variation" type="text">
                    <span class="material-input"></span>
                </div>
            </div>

            <div class="col-md-5">
                <div class="form-group label-floating">
                    <label class="control-label">From Date Available</label>
                    <input name="room_avaiable_from[{{ $counter }}]"  required="true" value="{{ old('price') }}" class="form-control  datepicker" type="text">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group label-floating is-empty">
                    <label class="control-label">Price</label>
                    <input name="room_price[{{ $counter }}]"  required="true" value="{{ old('price') }}" class="form-control   variation" type="number">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group label-floating is-empty">
                    <label class="control-label">Sale Price</label>
                    <input name="room_sale_price[{{ $counter }}]"   value=""  class="form-control variation_sale_price variation" type="number">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group label-floating">
                    <label class="control-label">End Date</label>
                    <input class="form-control  datepicker pull-right" name="room_sale_price_expires[{{ $counter }}]" id="datepicker" type="text">
                </div>
            </div>
            <div class="clearfix"></div>


            
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="row">
                    <div  class="  text-center"></div>
                    <div   class="col-md-12 col-sm-6 col-xs-6">
                        <div id="j-drop" class=" j-drop">
                        <input accept="image/*"  required="true" onchange="getFile(this,'room_image[{{ $counter }}]')" class="upload_input"   data-msg="Upload  your image" type="file"  name="img"  />
                        <div   class=" upload-text  {{ $counter }}"> 
                            <a   class="" href="#">
                                <img class="" src="/backend/img/upload_icon.png">
                                <b>Click to upload image</b> 
                            </a>
                        </div>
                        <div id="j-details"  class="j-details"></div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div id="j-drop"  class="j-drop">
                <input accept="image/*"   onchange="getFile(this,'room_images[{{ $counter }}][]')" class="upload_input"  multiple="true"   type="file" id="upload_file_input" name="product_image"  />
                    <div   class=" upload-text  {{ $counter }}"> 
                    <a  class="" href="#">
                        <img class="" src="/backend/img/upload_icon.png">
                        <b>Click on anywhere to upload image</b> 
                    </a>
                    </div>
                    <div id="j-details"  class="j-details"></div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
             
            <div class="col-md-">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Collapsible Accordion</h4>
              </div>
              <div class="card-content">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h4 class="panel-title">
                          Collapsible Group Item #1
                          <i class="material-icons">keyboard_arrow_down</i>
                        </h4>
                      </a>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h4 class="panel-title">
                          Collapsible Group Item #2
                          <i class="material-icons">keyboard_arrow_down</i>
                        </h4>
                      </a>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h4 class="panel-title">
                          Collapsible Group Item #3
                          <i class="material-icons">keyboard_arrow_down</i>
                        </h4>
                      </a>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        
    
    
    </div> 
    
</div>

@section('inline-scripts')

$('.collapse').collapse()


@stop











    
