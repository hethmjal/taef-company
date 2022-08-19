
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container">
    <div class="card">
        <div class="card-header"><h4> <?php echo e(__('dashboard.add slider')); ?></h4></div>
        <div class="card-body">
            <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="<?php echo e(route('slider.update',$slider->id)); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="name"> <?php echo e(__('dashboard.title')); ?> </label>
                    <input name="title" type="text" placeholder="" value="<?php echo e($slider->title); ?>" class="form-control">
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
                    <label for="link"> <?php echo e(__('dashboard.link')); ?> </label>
                    <input name="link" type="text" placeholder="" value="<?php echo e($slider->link); ?>" class="form-control">
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
                    <img id="blah" width="100px" height="100px" src="<?php echo e(asset('uploads/'.$slider->image)); ?>" alt="your image" />
                </div>
            
    
             
                <div class="form-group">
    
                <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.edit')); ?></button>
            </div>
            </form>
        </div>
    </div>
</div>
<div>
   
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
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\taef-company\resources\views/admin/dashboard/update-slider.blade.php ENDPATH**/ ?>