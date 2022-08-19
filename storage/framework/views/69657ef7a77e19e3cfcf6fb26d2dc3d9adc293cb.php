
<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>
<br>
<div class="container">
  <a class="btn btn-primary" href="<?php echo e(route('app.add')); ?>"><?php echo e(__('dashboard.add app')); ?></a>
</div>
<div class="container mt-5 row">
    <?php $__currentLoopData = $marketings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-6">
  <div class="card" style="width: 500px;">
    <div class="card-body">
      <div class="row no-gutters">
        <div class="col-sm-5">
          <div class="row align-items-center">
            <img class="img" width="50px" src="<?php echo e(asset('uploads/'.$item->image)); ?>" alt="Suresh Dasari Card">
            <div class="mx-3">
              <h5 class="card-title text-info"><?php echo e($item->name); ?></h5>
              <p class="card-text"><small class="text-muted"><i class="far fa-clock text-warning"></i> <?php echo e($item->updated_at->diffForHumans()); ?></small></p>
            </div>
         
          </div>
           

        </div>

        <div class="w-100 text-right">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#code<?php echo e($item->id); ?>">
            <i class="fas fa-code"></i>
            <?php echo e(__('dashboard.add code')); ?>

          </button>
          
          <a href="<?php echo e(route('app.destroy',$item->id)); ?>" class="btn btn-danger">
            <i class="fas fa-trash"></i>
            <?php echo e(__('dashboard.delete')); ?>

          </a>
        </div>
    </div>
    </div>
  
</div>

<!-- Modal -->
<div class="modal fade" id="code<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e($item->name); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo e(route('app.add_code')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="id" value="<?php echo e($item->id); ?>">
            <div class="modal-body">
        <div class="form-group">
          <label for="name"><?php echo e(__('dashboard.code')); ?></label>
        <textarea  name="code" class="form-control" cols="30" rows="10"><?php echo e($item->code); ?></textarea>
   
        <?php $__errorArgs = ['code'];
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('dashboard.close')); ?></button>
        <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.add')); ?></button>
      </form>

      </div>
    </div>
  </div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<div class="col-6">
  <div class="card" style="width: 500px;">
    <div class="card-body">
      <div class="row no-gutters">
        <div class="col-sm-5">
          <div class="row align-items-center">
            <img class="img" width="50px"  src="<?php echo e(asset('uploads/'.$sms->image)); ?>" alt="sms">
            <div class="mx-3">
              <h5 class="card-title text-info mb-5">sms data</h5>
              
              <p class="card-text"><small class="text-muted"><i class="far fa-clock text-warning"></i> <?php echo e($sms->updated_at->diffForHumans()); ?></small></p>
            </div>
         
          </div>
           

        </div>

        <div class="w-100 text-right">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sms">
            <i class="fas fa-code"></i>
            <?php echo e(__('dashboard.add code')); ?>

          </button>
       
         
        </div>
    </div>
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="sms" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sms</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          
      
      <form action="<?php echo e(route('app.sms')); ?>" enctype="multipart/form-data" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden"   <?php if($sms): ?>value="<?php echo e($sms->id); ?>"<?php endif; ?> name="id">
            <div class="modal-body">
              <div class="form-group">
                  <label for="name"><?php echo e(__('username')); ?></label>
                  <input name="username" type="text" placeholder=""   <?php if($sms): ?>value="<?php echo e($sms->username); ?>"<?php endif; ?> class="form-control">
                  <?php $__errorArgs = ['username'];
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
                  <label for="name"><?php echo e(__('user sender')); ?></label>
                  <input name="user_sender"  <?php if($sms): ?>value="<?php echo e($sms->user_sender); ?>"<?php endif; ?>  type="text" placeholder=" " class="form-control">
                  <?php $__errorArgs = ['user_sender'];
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
                <label for="name"><?php echo e(__('api_key')); ?></label>
                <input name="api_key" type="text"  <?php if($sms): ?> value="<?php echo e($sms->api_key); ?>"<?php endif; ?> placeholder="" class="form-control">
                <?php $__errorArgs = ['api_key'];
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
              <label for="name"><?php echo e(__('dashboard.file')); ?></label>
              <input name="image"  type="file" placeholder=" "   class="form-control">
              <?php $__errorArgs = ['user_sender'];
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('dashboard.close')); ?></button>
        <button type="submit" class="btn btn-primary"><?php echo e(__('dashboard.add')); ?></button>
      </form>

      </div>
    </div>
  </div>
</div>
</div>
<?php $__env->startPush('js'); ?>


<script src="<?php echo e(asset('/js/modalpopup.js')); ?>"></script>

<?php $__env->stopPush(); ?>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\taef-company\resources\views/admin/dashboard/marketing.blade.php ENDPATH**/ ?>