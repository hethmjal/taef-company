
<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>


<div class="card mt-5 ml-5 mr-5 mb-5">
    <div class="card-header"> <h4> <?php echo e(__('dashboard.send phone mail')); ?> </h4></div>
    <br>
    <div class="card-body">
        <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="<?php echo e(route('sendPhoneMessage')); ?>">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="number" value="<?php echo e($number); ?>">
            
    
           
         
  
            <div class="form-group">
                <label for="name"><?php echo e(__('dashboard.message body')); ?></label>
              <textarea id="body" name="body" class="form-control" cols="30" rows="10"></textarea>
         
              <?php $__errorArgs = ['body'];
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

            <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.send')); ?></button>
        </div>
        </form>
    </div>
</div>
</div>
<?php $__env->startPush('js'); ?>

  
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\taef-company\resources\views/admin/dashboard/mobile-message.blade.php ENDPATH**/ ?>