
<?php $__env->startSection('content'); ?>

<div class="content">
    <?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?> 
<div class="row mb-5 col-8 m-auto">

  <div class="card col-5 "   data-toggle="modal" data-target="#brief1">
    <div class="card-header m-auto">
      <h6 class="text-primary m-auto">
        <?php echo e(__('dashboard.add')); ?> <?php echo e(__('dashboard.brief')); ?>    </h6>
    </div>
    <div class="card-body m-auto">
      <i class="fas fa-plus "></i>
    </div>
  </div>

  <div class="card col-5 mr-3"  data-toggle="modal" data-target="#brief2">
    <div class="card-header m-auto">
      <h6 class="text-primary m-auto">
        <?php echo e(__('dashboard.add')); ?> <?php echo e(__('dashboard.brief2')); ?> 
      </h6>
    </div>
    <div class="card-body m-auto">
      <i class="fas fa-plus "></i>
    </div>
  </div>
<a href="<?php echo e(route('home_content')); ?>" class=" col-5 ">
  <div class="card " >
    <div class="card-header m-auto">
      <h6 class="text-primary m-auto">
        <?php echo e(__('dashboard.add')); ?> <?php echo e(__('dashboard.content')); ?>

      </h6>
    </div>
    <div class="card-body m-auto">
      <i class="fas fa-plus "></i>
    </div>
  </div>
</a>
</div>

   























<!-- Modal -->
<div class="modal fade" id="brief1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('dashboard.brief')); ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="card">
            <div class="card-header"><h4> <?php echo e(__('dashboard.brief')); ?> </h4></div>
            <div class="card-body">
                <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="<?php echo e(route('brief1')); ?>">
                    <?php echo csrf_field(); ?>          
                    <div class="form-group">
                        <label for="name">(ar)<?php echo e(__('dashboard.description')); ?></label>
                      <textarea id="arbody" name="arbody" class="form-control" cols="20" rows="6"><?php if($brief1): ?>
                        <?php echo e($brief1->arbody); ?>

                      <?php endif; ?> </textarea>
                 
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
                      <textarea id="enbody" name="enbody" class="form-control" cols="20" rows="6"><?php if($brief1): ?><?php echo e($brief1->enbody); ?><?php endif; ?></textarea>
                 
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
        
                    <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.add')); ?></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('dashboard.close')); ?></button>

                </div>
                </form>
            </div>
        </div>
  
        </div>
      </div>
    </div>







<!-- Modal -->
<div class="modal fade" id="brief2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('dashboard.brief2')); ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="card">
            <div class="card-header"><h4> <?php echo e(__('dashboard.brief2')); ?> </h4></div>
            <div class="card-body">
                <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="<?php echo e(route('brief2')); ?>">
                    <?php echo csrf_field(); ?>          
                    <div class="form-group">
                        <label for="name">(ar)<?php echo e(__('dashboard.description')); ?></label>
                      <textarea id="arbody" name="arbody" class="form-control" cols="20" rows="6"><?php if($brief2): ?>
                        <?php echo e($brief2->arbody); ?>

                      <?php endif; ?> </textarea>
                 
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
                      <textarea id="enbody" name="enbody" class="form-control" cols="20" rows="6"><?php if($brief2): ?><?php echo e($brief2->enbody); ?><?php endif; ?></textarea>
                 
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
        
                    <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.add')); ?></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('dashboard.close')); ?></button>

                </div>
                </form>
            </div>
        </div>
  
        </div>
      </div>
    </div>


    
        </div>
    </div>
</div>
<div>
   
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



<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\taef-company\resources\views/admin/dashboard/website-content.blade.php ENDPATH**/ ?>