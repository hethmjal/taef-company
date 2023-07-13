
<?php $__env->startSection('content'); ?>


<div class="card mt-5 ml-5 mr-5 mb-5">
    <div class="card-header"> <h4> <?php echo e(__('dashboard.send mail')); ?> </h4></div>
    <br>
    <div class="card-body">
        <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="<?php echo e(route('sendGroupMail')); ?>">
            <?php echo csrf_field(); ?>
            <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <input type="hidden" name="emails[]" value="<?php echo e($email); ?>">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group">
                <label for="name"><?php echo e(__('dashboard.title')); ?></label>
                <input name="title" type="text" placeholder=" " class="form-control">
                <?php $__errorArgs = ['title'];
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

            <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.send')); ?></button>
        </div>
        </form>
    </div>
</div>
</div>
<?php $__env->startPush('js'); ?>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('body');

</script>  
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\taef-company\resources\views/admin/dashboard/send-group-mail.blade.php ENDPATH**/ ?>