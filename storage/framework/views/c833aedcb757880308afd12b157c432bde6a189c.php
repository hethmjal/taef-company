
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container">
    <div class="card">
        <div class="card-header"> <?php echo e(__('dashboard.edit news')); ?></div>
        <div class="card-body">
            <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="<?php echo e(route('news.update',$new->id)); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="name"> (ar)<?php echo e(__('dashboard.title')); ?> </label>
                    <input name="artitle" type="text" placeholder="العنوان" value="<?php echo e($new->artitle); ?>" class="form-control">
                    <?php $__errorArgs = ['artitle'];
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
                    <label for="name">(en)<?php echo e(__('dashboard.title')); ?> </label>
                    <input name="entitle" type="text" placeholder="العنوان" value="<?php echo e($new->entitle); ?>" class="form-control">
                    <?php $__errorArgs = ['entitle'];
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
                    <input accept="image/*" type='file' name="image" id="imgInp" class="form-control" />
                    <?php $__errorArgs = ['image'];
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
                    <label for="name"><?php echo e(__('dashboard.current image')); ?>:</label>
                    <img id="blah" width="100px" height="100px" src="<?php echo e(asset('uploads/'.$new->image)); ?>" alt="your image" />
                </div>
            
                
                <div class="form-group">
                    <label for="name">(ar)<?php echo e(__('dashboard.detailes')); ?></label>
                  <textarea id="arbody" name="arbody" class="form-control" cols="30" rows="10"><?php echo $new->arbody; ?></textarea>
             
                  <?php $__errorArgs = ['arbody'];
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
                  <textarea id="enbody" name="enbody" class="form-control" cols="30" rows="10"><?php echo $new->enbody; ?></textarea>
             
                  <?php $__errorArgs = ['enbody'];
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
    
                <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.edit')); ?></button>
            </div>
            </form>
        </div>
    </div>
<div>
   
</div>
    </div>
</div>
<?php $__env->startPush('js'); ?>
<script>
    imgInp.onchange = evt => {
             const [file] = imgInp.files
             if (file) {
               blah.src = URL.createObjectURL(file)
             }
           }
</script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('arbody');
CKEDITOR.replace('enbody');

</script>  
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\taef-company\resources\views/admin/dashboard/update-news.blade.php ENDPATH**/ ?>