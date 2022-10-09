    <h4 class="info-text">Enter Products Details</h4>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-9">
                    <div class="form-group label-floating is-empty">
                    <label class="control-label">Product Name</label>
                    <input  required="true" name="product_name" data-msg="" value="<?php echo e(old('product_name')); ?>" class="form-control" type="text">
                    <span class="material-input"></span>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="form-group label-floating">
                    <label class="control-label">Brands</label>
                    <select name="brand_id" class="form-control">
                        <option disabled="" selected="selected"></option>
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <option value="<?php echo e($brand->id); ?>"> <?php echo e($brand->brand_name); ?> </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        id="description" class="form-control" rows="50"><?php echo e(old('description')); ?></textarea>
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
                    Featured Product
                    </legend>
                    <div class="togglebutton">
                    <label>
                        <input name="featured_product"  value="1" type="checkbox" >
                        Yes/No
                    </label>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-4">
            <label>Catgeories </label>
            <div class="well well-sm" style="height: 250px; background-color: #fff; color: black; overflow: auto;">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="parent" value="<?php echo e($category->id); ?>">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="<?php echo e($category->id); ?>" name="category_id[]" >
                                <?php echo e($category->name); ?>  
                                <a href="<?php echo e(route('category.edit',['category'=>$category->id])); ?>">
                                <i class="fa fa-pencil"></i> Edit</a> 
                            </label>
                        </div>   

                        <?php $__currentLoopData = $category->children->sortBy('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="children" value="<?php echo e($obj->id); ?>">
                            <div class="checkbox">
                                    <label>
                                        <input 
                                        type="checkbox" value="<?php echo e(trim($obj->id)); ?>" name="category_id[]" >
                                        <?php echo e($obj->name); ?>  
                                    </label>
                                </div>  

                                
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
           
           
           
            <h4>Meta Fields</h4>
            <?php $__currentLoopData = $meta_attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meta_attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-group ">
                    <label class="control-label"><?php echo e($meta_attribute->name); ?></label>
                    <select name="meta_fields[<?php echo e($meta_attribute->id); ?>]" class="form-control"  title="Choose <?php echo e($meta_attribute->name); ?>" data-style="select-with-transition" title="<?php echo e($meta_attribute->name); ?>" data-size="7">
                        <option   value="" selected>Choose One</option>
                        <?php $__currentLoopData = $meta_attribute->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meta_attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option   value="<?php echo e($meta_attribute->id); ?>">&nbsp;&nbsp;&nbsp;<?php echo e($meta_attribute->name); ?> </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/avenuemontaigne.ng/resources/views/admin/products/product_data.blade.php ENDPATH**/ ?>