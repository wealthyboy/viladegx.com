    <h4 class="info-text">Enter Products Details</h4>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group label-floating is-empty">
                    <label class="control-label">Apartment Name</label>
                    <input  required="true" name="name" data-msg="" value="{{ old('name') }}" class="form-control" type="text">
                    <span class="material-input"></span>
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
            <label> </label>
            <div class="well well-sm" style="height: 250px; background-color: #fff; color: black; overflow: auto;">
                @foreach($services as $service)
                    <div class="parent" value="{{ $service->id }}">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="{{ $service->id }}" name="service_id[]" >
                                {{ $service->name }}  
                                <a href="{{ route('category.edit',['service'=>$service->id]) }}">
                                <i class="fa fa-pencil"></i> Edit</a> 
                            </label>
                        </div>   
                        @include('includes.product_categories',['obj'=>$service,'space'=>'&nbsp;&nbsp;','model' => 'service','url' => 'service'])
                    </div>
                @endforeach
            </div>
           
           
           
            
        </div>
    </div>
