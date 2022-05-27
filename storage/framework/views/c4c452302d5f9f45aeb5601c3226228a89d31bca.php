
<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>
<br>
<div class="container mt-5">
  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\Partners::class)): ?>
  <div class="container">
    <a class="btn btn-primary" href="<?php echo e(route('parteners.add')); ?>"><?php echo e(__('dashboard.add partner')); ?>  </a>
</div>
  <?php endif; ?>
  
<br>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">(ar)<?php echo e(__('front.name')); ?> </th>
        <th scope="col">(en)<?php echo e(__('front.name')); ?> </th>

        <th scope="col"><?php echo e(__('dashboard.image')); ?></th>
        <th scope="col">(ar)<?php echo e(__('dashboard.detailes')); ?></th>
        <th scope="col">(en)<?php echo e(__('dashboard.detailes')); ?></th>

        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php $x =1; ?>
    <?php $__currentLoopData = $parteners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partener): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <th scope="row"><?php  echo $x++; ?></th>
        <td><?php echo e($partener->arname); ?></td>
        <td><?php echo e($partener->enname); ?></td>
        <td>
            <img width="100px" height="100px" src="<?php echo e(asset('uploads/'.$partener->logo)); ?>" />
        </td>

        <td><?php echo Str::words($partener->ardes,10); ?></td>
        <td><?php echo Str::words($partener->endes,10); ?></td>

        <td>
          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $partener)): ?>
          <a class="btn btn-outline-success btn-sm" href="<?php echo e(route('parteners.edit',$partener->id)); ?> "><i class="fa fa-edit" aria-hidden="true"></i></a>

          <?php endif; ?>
          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $partener)): ?>

            <a class="btn btn-outline-danger btn-sm" href="<?php echo e(route('parteners.destroy',$partener->id)); ?> "><i class="fa fa-trash" aria-hidden="true"></i></a>
            <?php endif; ?>
        </td>
      </tr>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  
</div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\taef-company\resources\views/admin/dashboard/parteners.blade.php ENDPATH**/ ?>