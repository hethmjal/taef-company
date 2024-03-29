
<?php $__env->startSection('content'); ?>


<div class="card mt-5 ml-5 mr-5 mb-5">
    <div class="card-header"> <h4>  <?php echo e(__('dashboard.add partner')); ?> </h4></div>
    <br>
    <div class="card-body">
        <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="<?php echo e(route('parteners.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">(ar)<?php echo e(__('front.name')); ?></label>
                <input name="arname" type="text" placeholder=" " class="form-control">
                <?php $__errorArgs = ['arname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="invalid-feedback d-block"> <?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <label for="name">(en)<?php echo e(__('front.name')); ?></label>
                <input name="enname" type="text" placeholder=" " class="form-control">
                <?php $__errorArgs = ['enname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="invalid-feedback d-block"> <?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
           
          
            

            <div class="form-group">
                <label for="name"><?php echo e(__('dashboard.image')); ?></label>
                <input name="logo" type="file"  class="form-control">
                <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="invalid-feedback d-block"> <?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <label for="name"><?php echo e(__('dashboard.gallery')); ?></label>
                <input name="gallary[]" type="file" multiple  class="form-control">
            </div>
         
  
            <div class="form-group">
                <label for="name">(ar)<?php echo e(__('dashboard.detailes')); ?></label>
              <textarea id="ardes" name="ardes" class="form-control" cols="30" rows="10"></textarea>
         
              <?php $__errorArgs = ['ardes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <p class="invalid-feedback d-block"> <?php echo e($message); ?></p>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
               </div>

               <div class="form-group">
                <label for="name">(en)<?php echo e(__('dashboard.detailes')); ?></label>
              <textarea id="endes" name="endes" class="form-control" cols="30" rows="10"></textarea>
         
              <?php $__errorArgs = ['endes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <p class="invalid-feedback d-block"> <?php echo e($message); ?></p>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
               </div>

               <div class="form-group">
                <label for="name"><?php echo e(__('dashboard.link')); ?></label>
                <input name="link" type="text" placeholder=" " class="form-control">
                <?php $__errorArgs = ['link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="invalid-feedback d-block"> <?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">

            <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.add')); ?></button>
        </div>
        </form>
    </div>
</div>
</div>
<?php $__env->startPush('js'); ?>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('ardes');
CKEDITOR.replace('endes');

</script>  
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\taef-company\resources\views/admin/dashboard/add-partener.blade.php ENDPATH**/ ?>