<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SystemSetting;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\Attribute;
use App\Models\ProductVariationValue;
use App\Models\RelatedProduct;
use App\Models\Review;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\ProductsFilter\AttributesFilter;







class ProductsController extends Controller
{

    public function __construct()
    {	  
	  $this->settings =  SystemSetting::first();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function  index(Request $request,Category $category,Builder $builder)  
    {

        $use_sub_categories = false;
        $breadcrumb = explode('-',basename($request->path()));
        $gen =null;
        if(!empty($breadcrumb)){
           $gen = $breadcrumb[0];
        }

        $gender = null;
        $f_products = Product::where('featured',1)->orderBy('created_at','DESC')->take(8)->get();
        if ($request->path() == 'products/men'){
            $gender = 'men';
            $use_sub_categories = true;
        }

        if ($request->path() == 'products/women') {
            $gender =  'women';
            $use_sub_categories = true;
        }


        $page_title = implode(" ",explode('-',$category->slug));
        $category_attributes = $category->parent_attributes()->has('attribute_children')->get();
        $products = Product::whereHas('categories',function(Builder  $builder) use ($category){
            $builder->where('categories.slug',$category->slug);
        })->filter($request,$this->getFilters($category_attributes))->latest()->paginate($this->settings->products_items_per_page);
        $products->appends(request()->all());
        if($request->ajax()) {
            return response()->json([
                'products' => $products->toArray(),
                'category_attributes' => $category_attributes->count()
            ]); 
        }




        $parent_category =  explode('-',$category->slug);
        $parent_category =  $parent_category[0];
        return  view('products.index',compact(
            'category',
            'page_title',
            'category_attributes',
            'breadcrumb',
            'products',
            'parent_category',
            'f_products',
            'gender',
            'use_sub_categories',
            'gen'
        ));     
    }



    public function getFilters($category_attributes){
        $filters = [];
        foreach ($category_attributes as $category_attribute){
           $filters[$category_attribute->slug] = AttributesFilter::class;
        }
        return $filters;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,Category $category,Product $product)  { 
        $page_title = "{$product->product_name}";
        $favorites ='';
        $data= [];
        $breadcrumb = explode('/', $request->path());
        $breadcrumbs = explode('-', $breadcrumb[1]);



        foreach ($product->parent_attributes as  $parent_attribute) {
            if ($parent_attribute->p_attribute_children()){
                $data[$parent_attribute->name] = $parent_attribute->p_attribute_children();
            }
        }

        $attributes =  collect($data);
        $attributes = $attributes->count() && $product->product_type == 'variable' ? $attributes : '{}';
        $related_products = RelatedProduct::where(['product_id' => $product->id])->get();
        $product->load(["variants","variants.images","default_variation","default_variation.images"]);
    	return view('products.show',compact('breadcrumbs','category','related_products','attributes','product','page_title'));
    }

    
    public function search(Request $request){
        $filtered_array = $request->only(['q', 'field']);
		if (empty( $filtered_array['q'] ) )  { 
			return redirect('/errors');
        }
        $breadcrumb = 'Search Results for  ' .$filtered_array['q'] ; 

		if($request->has('q')){
			$filtered_array = array_filter($filtered_array);
                $query = Product::whereHas('categories', function( $query ) use ( $filtered_array ){
                    $query->where('categories.name','like','%' .$filtered_array['q'] . '%')
                        ->orWhere('products.product_name', 'like', '%' .$filtered_array['q'] . '%')
                        ->orWhere('products.sku', 'like', '%' .$filtered_array['q'] . '%');
                })->orWhereHas('brand', function( $query ) use ( $filtered_array ){
                    $query->where('brands.brand_name', 'like', '%' .$filtered_array['q'] . '%');
                });
        }
			
        $products = $query->groupBy('products.id')->latest()->paginate($this->settings->products_items_per_page);
        $products->appends(request()->all());

        if($request->ajax())
        { 
            return response()->json([
                'products' => $products->toArray(),
            ]); 
        }
        return view('products.index',compact('products','breadcrumb'));  
    }


}
