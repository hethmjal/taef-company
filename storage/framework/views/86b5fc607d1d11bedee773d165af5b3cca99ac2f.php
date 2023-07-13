
<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>
<br>
<div class="container mt-5">
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\User::class)): ?>
    <div class="container">
      <a class="btn btn-primary" href="<?php echo e(route('register')); ?>"><?php echo e(__('front.add new user')); ?>  </a>
  </div>
    <?php endif; ?>
 



<br>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col"><?php echo e(__('front.employe')); ?> </th>
        <th scope="col"><?php echo e(__('front.email')); ?></th>
        <th scope="col"><?php echo e(__('front.phone')); ?> </th>
        <th scope="col"> <?php echo e(__('front.type')); ?></th>

        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php $x =1; ?>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <th scope="row"><?php  echo $x++; ?></th>
        <td><?php echo e($user->name); ?></td>
        <td><?php echo e($user->email); ?></td>
        <td><?php echo e($user->phone); ?></td>
        <td><?php if($user->user_role): ?><?php echo e($user->user_role->role->name); ?><?php endif; ?></td>



        <td>
          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user)): ?>

            <a class="btn btn-primary" href=" <?php echo e(route('user.edit',$user->id)); ?>"><?php echo e(__('dashboard.edit')); ?></a>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $user)): ?>

            <a class="btn btn-danger" href="<?php echo e(route('user.destroy',$user->id)); ?> "><?php echo e(__('dashboard.delete')); ?></a>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role',  $user)): ?>

            <a class="btn btn-success" href="<?php echo e(route('user.roles',$user->id)); ?>"> <?php echo e(__('dashboard.update roles')); ?></a>
            <?php endif; ?>
        </td>
      </tr>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  
</div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\taef-company\resources\views/admin/dashboard/users.blade.php ENDPATH**/ ?>