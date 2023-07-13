
<?php $__env->startSection('content'); ?>

<div class="container ">
    <div class="card">
        <div class="card-header">
            <h4> <?php echo e(__('dashboard.content')); ?> </h4>
        </div>
        <div class="card-body">
            <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="<?php echo e(route('tif_desc')); ?>">
                <?php echo csrf_field(); ?>
                <div class="container">
                    <div class="form-group">
                        <label for="name"> (ar)<?php echo e(__('dashboard.title')); ?> </label>
                        <input name="artitle1" type="text" value="<?php if($image1): ?><?php echo e($image1->artitle); ?><?php endif; ?>"
                            placeholder="<?php echo e(__('dashboard.title')); ?>" class="form-control">
                        <?php $__errorArgs = ['artitle1'];
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
                        <input name="entitle1" type="text" value="<?php if($image1): ?><?php echo e($image1->entitle); ?><?php endif; ?>"
                            placeholder="<?php echo e(__('dashboard.title')); ?>" class="form-control">
                        <?php $__errorArgs = ['entitle1'];
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
                        <input name="image1" type="file" onchange="loadFile(event,'firstImg')" class="form-control">
                        <?php $__errorArgs = ['image1'];
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
                     <?php if($image1): ?>   <img id="firstImg" width="100px" height="100px" src="<?php echo e(asset('uploads/'.$image1->image)); ?>"
                            alt="your image" /> <?php endif; ?>
                    </div>


                    <div class="form-group">
                        <label for="name">(ar)<?php echo e(__('dashboard.description')); ?></label>
                        <textarea id="arbody1" name="arbody1" class="form-control" cols="20"
                            rows="6"><?php if($image1): ?><?php echo e($image1->arbody); ?><?php endif; ?></textarea>

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
                        <textarea id="enbody1" name="enbody1" class="form-control" cols="20"
                            rows="6"><?php if($image1): ?><?php echo e($image1->enbody); ?><?php endif; ?></textarea>

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
                    <div class="form-group">
                        <div class="form-group">
                            <label for="name"> (ar)<?php echo e(__('dashboard.title')); ?> </label>
                            <input name="artitle2" type="text" value="<?php if($image2): ?><?php echo e($image2->artitle); ?><?php endif; ?>"
                                placeholder="<?php echo e(__('dashboard.title')); ?>" class="form-control">
                            <?php $__errorArgs = ['artitle2'];
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
                            <input name="entitle2" type="text" value="<?php if($image2): ?><?php echo e($image2->entitle); ?><?php endif; ?>"
                                placeholder="<?php echo e(__('dashboard.title')); ?>" class="form-control">
                            <?php $__errorArgs = ['entitle2'];
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
                        <label for="name"><?php echo e(__('dashboard.image')); ?></label>
                        <input name="image2" type="file" onchange="loadFile(event,'seconedImg')" class="form-control">
                        <?php $__errorArgs = ['image2'];
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
                        <?php if($image2): ?>       <img id="seconedImg" width="100px" height="100px" src="<?php echo e(asset('uploads/'.$image2->image)); ?>"
                            alt="your image" /> <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="name">(ar)<?php echo e(__('dashboard.description')); ?></label>
                        <textarea id="arbody2" name="arbody2" class="form-control" cols="20"
                            rows="6"><?php if($image2): ?><?php echo e($image2->arbody); ?><?php endif; ?></textarea>

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
                        <textarea id="enbody2" name="enbody2" class="form-control" cols="20"
                            rows="6"><?php if($image2): ?><?php echo e($image2->enbody); ?><?php endif; ?></textarea>

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
                    <div class="form-group">
                        <label for="name"> (ar)<?php echo e(__('dashboard.title')); ?> </label>
                        <input name="artitle3" type="text" value="<?php if($image3): ?> <?php echo e($image3->artitle); ?><?php endif; ?>"
                            placeholder="<?php echo e(__('dashboard.title')); ?>" class="form-control">
                        <?php $__errorArgs = ['artitle3'];
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
                        <input name="entitle3" type="text" value="<?php if($image3): ?> <?php echo e($image3->entitle); ?><?php endif; ?>"
                            placeholder="<?php echo e(__('dashboard.title')); ?>" class="form-control">
                        <?php $__errorArgs = ['entitle3'];
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
                        <input name="image3" type="file" onchange="loadFile(event,'thirdImg')" class="form-control">
                        <?php $__errorArgs = ['image3'];
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
                        <?php if($image3): ?>                 <img id="thirdImg" width="100px" height="100px" src="<?php echo e(asset('uploads/'.$image3->image)); ?>"
                            alt="your image" /> <?php endif; ?>
                    </div>

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
                        <textarea id="enbody3" name="enbody3" class="form-control" cols="20"
                            rows="6"><?php if($image3): ?><?php echo e($image3->enbody); ?><?php endif; ?></textarea>

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
                        </ </div>
                    </div>


                    <div class="container form-group">

                        <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.add')); ?></button>
                    </div>


            </form>
        </div>
    </div>
</div>

<?php $__env->startPush('js'); ?>
<script>
  var loadFile = function(event,id) {
    var output = document.getElementById(id);
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\taef-company\resources\views/admin/dashboard/home_content.blade.php ENDPATH**/ ?>