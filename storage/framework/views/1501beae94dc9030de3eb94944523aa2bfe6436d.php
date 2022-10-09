<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul style="list-style:none;">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li style="padding-left: 5px;"> &nbsp;&nbsp;<i class="fa fa-exclamation-circle"></i> &nbsp;&nbsp;<strong><?php echo e($error); ?></strong></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </ul>
         
    </div>
 
<?php endif; ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/avenuemontaigne.ng/resources/views/errors/errors.blade.php ENDPATH**/ ?>