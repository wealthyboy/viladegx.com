@foreach($obj->children->sortBy('name') as $obj)
    <div class="children" value="{{ $obj->id }}">
       <div class="">
            <label>
                <input 
                    type="checkbox" 
                    value="{{ $obj->id }}"   
                    name="attribute_ids[]" 
                >
                {{ $obj->name }}
            </label>
        </div>  
    @include('includes.children',['obj'=>$obj])
    </div>
@endforeach