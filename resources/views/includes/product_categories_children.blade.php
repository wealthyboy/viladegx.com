@foreach($obj->children->sortBy('name') as $obj)
    <div class="children" value="{{ $obj->id }}">
       <div class="checkbox">
            <label>
                <input 
                {{ $category->check($product->categories , $obj->id) ? 'checked' : '' }} 
                type="checkbox" value="{{ trim($obj->id) }}" name="category_id[]" >
                {{ $obj->name }}  
            </label>
        </div>  
    </div>
@endforeach