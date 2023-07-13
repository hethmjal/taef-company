
<?php $__env->startSection('content'); ?>

<div class="content">
    <?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>
    <div class="container">

        <div class="card">
            <div class="card-header"><h4> <?php echo e(__('dashboard.aboutus3')); ?> </h4></div>
            <div class="card-body">
                <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="<?php echo e(route('aboutuscontent')); ?>">
                    <?php echo csrf_field(); ?>   
                    <div class="container">
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
                            <img id="blah" width="100px" height="100px" src="<?php if($aboutus): ?><?php echo e(asset('uploads/'.$aboutus->image)); ?><?php endif; ?>" alt="your image" />
                        </div>
                    




                    <div class="form-group">
                        <label for="name">(ar)<?php echo e(__('dashboard.description')); ?></label>
                      <textarea id="arbody" name="arbody" class="form-control" cols="20" rows="6"><?php if($aboutus): ?><?php echo e($aboutus->arbody); ?><?php endif; ?></textarea>
                 
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
                        <label for="name">(en)<?php echo e(__('dashboard.description')); ?></label>
                      <textarea id="enbody" name="enbody" class="form-control" cols="20" rows="6"><?php if($aboutus): ?><?php echo e($aboutus->enbody); ?><?php endif; ?></textarea>
                 
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
                    </div>
        
                    <div class="form-group">
        
                    <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.add')); ?></button>
                </div>
                </form>
            </div>
        </div>

















    <div class="card">
        <div class="card-header"><h4> <?php echo e(__('dashboard.aboutus2')); ?> </h4></div>
        <div class="card-body">
            <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="<?php echo e(route('imagecontent')); ?>">
                <?php echo csrf_field(); ?>   
                <div class="container">
                <h6>1-<?php echo e(__('dashboard.our vision')); ?></h6>
              

                <div class="form-group">
                    <label for="name">(ar)<?php echo e(__('dashboard.description')); ?></label>
                  <textarea id="arbody1" name="arbody1" class="form-control" cols="20" rows="6"><?php if($image1): ?><?php echo e($image1->arbody); ?><?php endif; ?></textarea>
             
                  <?php $__errorArgs = ['arbody1'];
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
                    <label for="name">(en)<?php echo e(__('dashboard.description')); ?></label>
                  <textarea id="enbody1" name="enbody1" class="form-control" cols="20" rows="6"><?php if($image1): ?><?php echo e($image1->enbody); ?><?php endif; ?></textarea>
             
                  <?php $__errorArgs = ['enbody1'];
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
                </div>


<hr>

<div class="container">
    <h6>2-<?php echo e(__('dashboard.our message')); ?></h6>
                  
                <div class="form-group">
                    <label for="name">(ar)<?php echo e(__('dashboard.description')); ?></label>
                  <textarea id="arbody2" name="arbody2" class="form-control" cols="20" rows="6"><?php if($image2): ?><?php echo e($image2->arbody); ?><?php endif; ?></textarea>
             
                  <?php $__errorArgs = ['arbody2'];
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
                    <label for="name">(en)<?php echo e(__('dashboard.description')); ?></label>
                  <textarea id="enbody2" name="enbody2" class="form-control" cols="20" rows="6"><?php if($image2): ?><?php echo e($image2->enbody); ?><?php endif; ?></textarea>
             
                  <?php $__errorArgs = ['enbody2'];
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
</div>


<hr>


<div class="container">
    <h6>3-<?php echo e(__('dashboard.our goal')); ?></h6>
                  
                <div class="form-group">
                    <label for="name">(ar)<?php echo e(__('dashboard.description')); ?></label>
                  <textarea id="arbody3" name="arbody3" class="form-control" cols="20" rows="6"><?php if($image3): ?>
                    <?php echo e($image3->arbody); ?><?php endif; ?>
                  </textarea>
             
                  <?php $__errorArgs = ['arbody3'];
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
                    <label for="name">(en)<?php echo e(__('dashboard.description')); ?></label>
                  <textarea id="enbody3" name="enbody3" class="form-control" cols="20" rows="6"><?php if($image3): ?><?php echo e($image3->enbody); ?><?php endif; ?></textarea>
             
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
</div>
    
                <div class="form-group">
    
                <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.add')); ?></button>
            </div>
            </form>
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
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\taef-company\resources\views/admin/dashboard/aboutus.blade.php ENDPATH**/ ?>