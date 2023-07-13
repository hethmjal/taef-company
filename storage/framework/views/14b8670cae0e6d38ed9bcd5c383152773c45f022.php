
<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>
<br>
<div class="container mt-5">
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\Group::class)): ?>
    <div class="container">
      <a class="btn btn-primary" href="<?php echo e(route('group.create')); ?>"><?php echo e(__('dashboard.add group')); ?></a>
  </div>
    <?php endif; ?>
 



<br>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col"><?php echo e(__('dashboard.group name')); ?>  </th>
        <th scope="col"> <?php echo e(__('dashboard.num of users')); ?> </th>
        <th scope="col"> </th>

        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php $x =1; ?>
    <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   
    <tr>
    
        <th scope="row"><?php  echo $x++; ?></th>
        <td> <a href="<?php echo e(route('groups',$group->name)); ?>"> <?php echo e($group->name); ?>    </a></td> 
        <td><?php if($group->usersNumber): ?><?php echo e(count($group->usersNumber)); ?><?php else: ?> 0 <?php endif; ?></td>


        <td>
  
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $group)): ?>

              <a class="btn btn-outline-success btn-sm" href=" <?php echo e(route('group.edit',$group->id)); ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
              <?php endif; ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete',$group)): ?>

              <a class="btn btn-outline-danger btn-sm" href="<?php echo e(route('group.destroy',$group->id)); ?> "><i class="fa fa-trash" aria-hidden="true"></i></a>
             <?php endif; ?>
          </td>
      </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  
</div>
<form accept-charset="utf-8" enctype="multipart/form-data" method="POST" <?php if($g): ?>
action="<?php echo e(route('group.update',$g->id)); ?>"  
<?php endif; ?> >
  <?php echo csrf_field(); ?>
<div class="container">
  <label for="">الصلاحيات:</label>

  <div class="row">

            <?php echo csrf_field(); ?>
       
    <?php $__currentLoopData = config('abilities'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4">
    <div>
        <label for="">
            <input class="select_all" style="background: rgb(23, 182, 240)!important" type="checkbox" name="roles[]" <?php if($g): ?> <?php if(in_array($key,$g->roles)): ?> checked <?php endif; ?> <?php endif; ?> value="<?php echo e($key); ?>">
            <h4><?php echo e(__('dashboard.'.$key)); ?></h4>
            <input  class="key" type="hidden" value="<?php echo e($key); ?>">
        </label>
    </div>
       
    <ul class="">
        <?php $__currentLoopData = $label; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <label for="">
                <input class="<?php echo e($key); ?>" type="checkbox" name="roles[]" <?php if($g): ?> <?php if(in_array($key2,$g->roles)): ?> checked <?php endif; ?> <?php endif; ?> value="<?php echo e($key2); ?>">
                <?php echo e($item); ?>

            </label>
        </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</div>
<div class="form-group m-auto">

  <button  class="btn btn-primary"><?php echo e(__('dashboard.edit')); ?></a>
</div>
</form>
<?php $__env->startPush('js'); ?>
    <script>


         $('.select_all').change(function() {
            var key =$(this).parent().find(".key").val();
            console.log(key);
        if($(this).is(':checked')) {
            $("."+key).attr('checked', 'checked');
        } else {
            $("."+key).removeAttr('checked');
        }
    });
        $("input[type='checkbox']").not('#select_all').change( function() {
        $('#select_all').removeAttr('checked');
    });
    </script>
<?php $__env->stopPush(); ?>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\taef-company\resources\views/admin/dashboard/groups.blade.php ENDPATH**/ ?>