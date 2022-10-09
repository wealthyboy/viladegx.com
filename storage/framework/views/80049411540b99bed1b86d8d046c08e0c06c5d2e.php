<?php $__env->startSection('pagespecificstyles'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
   <div class="col-sm-12">
      <?php echo $__env->make('admin.errors.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!--      Wizard container        -->
      <div class="wizard-container">
         <div class="card wizard-card" data-color="rose" id="wizardProfile">
            <form enctype="multipart/form-data" id="product-form" action="<?php echo e(route('admin.products.store')); ?>" method="post">
               <?php echo csrf_field(); ?>
               <!--  You can switch " data-color="purple"   with one of the next bright colors: "green", "orange", "red", "blue"       -->
               <div class="wizard-header">
                  <h3 class="wizard-title">
                     Upload Product
                  </h3>
               </div>
               <div class="wizard-navigation">
                  <ul>
                     <li><a href="wizard.html#ProductData" data-toggle="tab">Product Data</a></li>
                     <li><a href="wizard.html#RelatedProducts" data-toggle="tab">Related Products</a></li>
                     <li><a href="wizard.html#ProductVariations" data-toggle="tab">Product Variation</a></li>
                  </ul>
               </div>
               <div class="tab-content">
                  <div class="tab-pane" id="ProductData">
                     <?php echo $__env->make('admin.products.product_data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>

                  <div class="tab-pane" id="RelatedProducts">
                     <?php echo $__env->make('admin.products.product_related', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                  <div class="tab-pane" id="ProductVariations">
                     <h4 class="info-text">Product Variation</h4>
                     <div class="col-md-12">
                        <h4>Product Type </h4>
                        <div class="form-group">
                           <label class="control-label">Product Type</label>
                           <select name="type" id="product-type" class="form-control"  required="true" title="Please select product type"  title="" data-size="7">
                              <option  value="" selected>Choose One</option>
                              <option  value="simple">Simple</option>
                              <option  value="variable">Variable</option>
                           </select>
                        </div>
                     </div>
                     <div class="simple-product hide">
                        <?php echo $__env->make('admin.products.product_images', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                        <div class="row">
                           <div class="col-md-1">
                              <div class="form-group label-floating is-empty">
                                 <label class="control-label">Qty</label>
                                 <input name="quantity"  type="number" required="true"  value="<?php echo e(old('quantity')); ?>"  class="form-control">
                                 <span class="material-input"></span>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group label-floating is-empty">
                                 <label class="control-label">Price</label>
                                 <input name="price"  required="true" type="number" value="<?php echo e(old('price')); ?>" class="form-control">
                                 <span class="material-input"></span>
                              </div>
                           </div>
                           
                           
                           <div class="col-md-3">
                              <div class="form-group label-floating is-empty">
                                 <label class="control-label">Sale Price</label>
                                 <input name="sale_price"   value=""  class="form-control" type="text">
                                 <span class="material-input"></span>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group label-floating is-empty">
                                 <label class="control-label">Extra Percent Off</label>
                                 <input name="extra_percent_off"   value=""  class="form-control" type="number">
                                 <span class="material-input"></span>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group label-floating">
                                 <label class="control-label">End Date</label>
                                 <input class="form-control  pull-right datepicker" name="sale_price_expires"  type="text">
                                 <span class="material-input"></span>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <div class="form-group label-floating is-empty">
                                 <label class="control-label">Weight</label>
                                 <input name="weight"   type="text" value="<?php echo e(old('weight')); ?>" class="form-control">
                                 <span class="material-input"></span>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group label-floating is-empty">
                                 <label class="control-label">Length</label>
                                 <input name="length"   type="text" value="<?php echo e(old('length')); ?>" class="form-control" >
                                 <span class="material-input"></span>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group label-floating is-empty">
                                 <label class="control-label">Width</label>
                                 <input name="width"      value="<?php echo e(old('width')); ?>"  class="form-control" type="text">
                                 <span class="material-input"></span>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group label-floating is-empty">
                                 <label class="control-label">Height</label>
                                 <input name="height"      value="<?php echo e(old('height')); ?>"  class="form-control" type="text">
                                 <span class="material-input"></span>
                              </div>
                           </div>
                        </div>
                     </div>
               
                     <div class="clearfix"></div>
                     
                     <div class="row p-attr  variable-product hide">
                        <?php if(null !== $product_attributes): ?>
            
                        <div class="col-sm-9">
                           <?php $__currentLoopData = $product_attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="col-md-3 col-sm-6 col-xs-6">
                                 <div class="form-group ">
                                    <label class="control-label"><?php echo e($product_attribute->name); ?></label>
                                    <select name="" class="form-control product-attributes"  title="Choose <?php echo e($product_attribute->name); ?>" data-style="select-with-transition"  data-size="7">
                                          <option  value="" selected>Select <?php echo e($product_attribute->name); ?></option>
                                          <option   value="<?php echo e($product_attribute->id); ?>">&nbsp;&nbsp;&nbsp;<?php echo e($product_attribute->name); ?> </option>
                                    </select>
                                 </div>
                              </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <label class="col-md-3  col-xs-12 col-xs-12">
                           <button type="button"  id="product-attribute-add" class="btn btn-round btn-primary">
                              Add Variation
                              <span class="btn-label btn-label-right">
                                 <i class="fa fa-plus"></i>
                              </span>
                           </button>
                        </label>
                        <?php else: ?>
                           <div class="col-sm-7">
                              No attributes set. Go Products > attributes and set your attributes.
                           </div>
                        <?php endif; ?>
                     </div>

                  </div>
               <div class="wizard-footer">
                  <div class="pull-right">
                     <input type='button' class='btn btn-next btn-fill btn-rose btn-round btn-wd' name='next' value='Next' />
                     <input type='submit' class='btn btn-finish btn-fill btn-rose   btn-round  btn-wd' name='finish' value='Finish' />
                  </div>
                  <div class="pull-left">
                     <input type='button' class='btn btn-previous btn-fill btn-primary  btn-round  btn-wd' name='previous' value='Previous' />
                  </div>
                  <div class="clearfix"></div>
               </div>
            </form>
         </div>
      </div>
      <!-- wizard container -->
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-scripts'); ?>
   <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
   <script src="<?php echo e(asset('backend/js/products.js')); ?>"></script>
   <script src="<?php echo e(asset('backend/js/uploader.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('inline-scripts'); ?>
$(document).ready(function() {
   CKEDITOR.replace('description',{
      height: '400px'
   })       
});
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/avenuemontaigne.ng/resources/views/admin/products/create.blade.php ENDPATH**/ ?>