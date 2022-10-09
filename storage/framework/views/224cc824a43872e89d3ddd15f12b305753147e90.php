<?php $__env->startSection('content'); ?>


<div class="row">
    <div class="col-md-6">
        <?php echo $__env->make('errors.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card">
            <div class="card-content">
                <h4 class="card-title">Add Categories</h4>
              
                <div class="material-datatables">
                <form action="<?php echo e(route('category.store')); ?>" method="post" enctype="multipart/form-data" id="form-category">
                    <?php echo csrf_field(); ?>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Name
                                <small>*</small>
                            </label>
                            <input class="form-control"
                                name="name"
                                type="text"
                                required="true"
                            />
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Sort Order
                            </label>
                            <input class="form-control"
                                name="sort_order"
                                type="number"  
                            />
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Image link
                            </label>
                            <input class="form-control"
                                name="image_custom_link"
                                type="text"  
                            />
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <div class="form-group ">
                                <label class="control-label"> </label>
                                <textarea name="description" 
                                id="description" class="form-control"  rows="7"></textarea>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label class="control-label"></label>
                            <select name="type"  class="form-control">
                                <option  value="" selected="">--Choose Type--</option>
                                <option  value="fashion">fashion</option>
                                <option  value="none">None</option>
                            </select>
                        </div> -->
                        <div class="form-group ">
                            <label class="control-label"></label>
                            <select name="parent_id" class="form-control">
                            <option  value="">--Choose One--</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option class="" value="<?php echo e($category->id); ?>" ><?php echo e($category->name); ?> </option>
                                    <?php echo $__env->make('includes.children_options',['obj'=>$category,'space'=>'&nbsp;&nbsp;'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </select>
                        </div>
                       <div class="row">
                            <div class="col-md-12">
                               <h3 class="info-text">Upload Image</h3>
                            </div>
               
                            <div class="col-md-6">
                                <div id="m_image"  class="uploadloaded_image text-center mb-3">
                                    <div class="upload-text"> 
                                            <a class="activate-file" href="#">
                                            <img src="<?php echo e(asset('backend/img/upload_icon.png')); ?>">
                                            <b>Banner Image </b> 
                                            </a>
                                    </div>
                                    <div id="remove_image" class="remove_image hide">
                                        <a class="delete_image"  href="#">Remove</a>
                                    </div>
                                    <input accept="image/*"  class="upload_input" data-msg="Upload  your image" type="file" id="file_upload_input" name="category_image"  />
                                    <input type="hidden"  class="file_upload_input  stored_image" id="stored_image" name="banner_image">
                                </div>
                            </div>

                        </div>


                        <div class="hide">
                            <h3 class="info-text">Filters</h3>
                            <div class="well well-sm" style="height: 350px; background-color: #fff; color: black; overflow: auto;">
                                <ul class="treeview" data-role="treeview">
                                    <li data-icon="" data-caption="">
                                        <ul>
                                        <?php $__currentLoopData = $product_attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li data-caption="Documents">
                                            <div class="checkbox">
                                                <label>
                                                    <input name="attribute_id[]" value="<?php echo e($product_attribute->id); ?>

                                                    " type="checkbox">
                                                    <?php echo e($product_attribute->name); ?>

                                            </div>
                                        </li>
                                        <?php if($product_attribute->children->count()): ?>
                                            <?php $__currentLoopData = $product_attribute->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                            <li data-caption="Projects">
                                                <ul>
                                                    <li data-caption="Web">
                                                    <div class="checkbox">
                                                    <label> 
                                                    <input name="attribute_child_id[<?php echo e($product_attribute->id); ?>][]" value="<?php echo e($children->id); ?>" type="checkbox">
                                                    <?php echo e($children->name); ?>

                                                    </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?> 
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-footer text-right">
                            <button type="submit" class="btn btn-rose btn-round btn-group  btn-fill">Submit</button>
                        </div>
                    </form>
                </div>
            </div><!-- end content-->
        </div><!--  end card  -->
    </div> <!-- end col-md-6 -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-content">
                <h4 class="card-title">Categories</h4>
                    <div  class="checkbox col-md-6 text-left">
                        <label>
                            <input onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" type="checkbox" name="optionsCheckboxes" > Select All
                        </label>
                    </div>
                    <div  class="col-md-6 text-right">
                        <a href="javascript:void(0)" onclick="confirm('Are you sure?') ? $('#form-categories').submit() : false;" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                            <i class="material-icons">close</i> Delete
                        </a>
                    </div> 
                    <div class="clearfix"></div> 

                    <form action="<?php echo e(route('category.destroy',['category'=>1])); ?>" method="post" enctype="multipart/form-data" id="form-categories">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <div class="material-datatables">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="parent" value="<?php echo e($category->id); ?>">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="<?php echo e($category->id); ?>" name="selected[]" >
                                    <?php echo e($category->name); ?>  
                                    <a href="<?php echo e(route('category.edit',['category'=>$category->id])); ?>">
                                    <i class="fa fa-pencil"></i> Edit</a> 
                                    <a href="">
                                       <i class="fa fa-pencil"></i> Link
                                    </a> 


                                </label>
                            </div>   
                            <?php echo $__env->make('includes.children',['obj'=>$category,'space'=>'&nbsp;&nbsp;','model' => 'category','url' => 'category'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                    </div>
                </form>
            </div><!-- end content-->
        </div><!--  end card  -->
    </div> <!-- end col-md-6 -->
</div> <!-- end row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('inline-scripts'); ?>

$(document).ready(function() {
    let activateFileExplorer = 'a.activate-file';
    let delete_image = 'a.delete_image';
    var main_file = $("input#file_upload_input");

    Img.initUploadImage({
        url:'/admin/upload/image?folder=category',
        activator: activateFileExplorer,
        inputFile: main_file,
    });

    Img.deleteImage({
        url:'/admin/category/delete/image',
        activator: delete_image,
        inputFile: main_file,
    });
});

<?php $__env->stopSection(); ?>






<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/avenuemontaigne.ng/resources/views/admin/category/index.blade.php ENDPATH**/ ?>