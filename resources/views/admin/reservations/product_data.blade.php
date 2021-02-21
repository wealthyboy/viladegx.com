    <h4 class="info-text">Enter Apartment Details</h4>
    <div class="simple-product ">
        @include('admin.products.product_images') 
     </div>
               
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group label-floating is-empty">
                    <label class="control-label">Apartment Name</label>
                    <input  required="true" name="apartment_name" data-msg="" value="{{ old('apartment_name') }}" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group label-floating is-empty">
                    <label class="control-label">Address</label>
                    <input  required="true" name="address" data-msg="" value="{{ old('address') }}" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group label-floating is-empty">
                           <label class="control-label"></label>
                        <select name="city_id" required="true" class="form-control">
                            <option  value="" selected="">--Choose City--</option>
                            @foreach($locations as $location)
                                <option class="" disabled value="{{ $location->id }}" >{{ $location->name }} </option>
                                @include('includes.children_options',['obj'=>$location,'space'=>'&nbsp;&nbsp;'])
                            @endforeach
                                
                        </select>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Description</label>
                    <div class="form-group ">
                        <label class="control-label"> Enter description here</label>
                        <textarea name="description" 
                        id="description" class="form-control" rows="50">{{ old('description') }}</textarea>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <legend>  
                    Enable/Disable
                    </legend>
                    <div class="togglebutton">
                    <label>
                    <input name="allow"  value="1" type="checkbox" checked>
                    Enable/Disable
                    </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <legend>  
                    Featured 
                    </legend>
                    <div class="togglebutton">
                    <label>
                        <input name="featured"  value="1" type="checkbox" >
                        Yes/No
                    </label>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-4">
            <label>Extra Services</label>
            <div class="well well-sm" style="height: 250px; background-color: #fff; color: black; overflow: auto;">
                @foreach($services as $service)
                    <div class="parent" value="{{ $service->id }}">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="{{ $service->id }}" name="service_id[]" >
                                {{ $service->name }}  
                                <a href="{{ route('services.edit',['service'=>$service->id]) }}">
                                <i class="fa fa-pencil"></i> Edit</a> 
                            </label>
                        </div>   
                    </div>
                @endforeach
            </div>


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
