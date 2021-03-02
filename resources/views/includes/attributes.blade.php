@foreach($obj->children->sortBy('name') as $obj)
    <div class="children" value="{{ $obj->id }}">
       <div class="">
            <label>
                <input type="checkbox" value="{{ $obj->id }}" name="attribute_ids[]" >
                {{ $obj->name }}  <a href="{{ route($model.'.edit',[$url => $obj->id]) }}"><i class="fa fa-pencil"></i> Edit</a>
            </label>
        </div>  
    @include('includes.children',['obj'=>$obj])
    </div>
@endforeach