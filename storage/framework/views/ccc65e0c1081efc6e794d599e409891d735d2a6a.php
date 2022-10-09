<?php $__currentLoopData = $obj->children->sortBy('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="children" value="<?php echo e($obj->id); ?>">
       <div class="checkbox">
            <label>
                <input 
                type="checkbox" value="<?php echo e(trim($obj->id)); ?>" name="category_id[]" >
                <?php echo e($obj->name); ?>  
            </label>
        </div>  
    <?php echo $__env->make('includes.product_categories',['obj'=>$obj], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/avenuemontaigne.ng/resources/views/includes/product_categories.blade.php ENDPATH**/ ?>