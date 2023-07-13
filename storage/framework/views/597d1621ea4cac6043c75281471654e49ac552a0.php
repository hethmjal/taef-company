
<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>
<div class="card mt-5 ml-5 mr-5 mb-5">
    <div class="mt-3 ml-3">
    <label for="">الصلاحيات:</label>

 





<form action="<?php echo e(route('user.store_roles',$user->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
<div class="row">
 

    
    <?php $__currentLoopData = config('abilities'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4">
    <div>
        <label for="">
            <input class="select_all" style="background: rgb(23, 182, 240)!important" type="checkbox" name="roles[]" <?php if($user->roles || $user->user_role->role->roles): ?> <?php if(in_array($key,$user->roles)||in_array($key,$user->user_role->role->roles)): ?> checked <?php endif; ?> <?php endif; ?> value="<?php echo e($key); ?>">
            <h4><?php echo e(__('dashboard.'.$key)); ?></h4>
            <input  class="key" type="hidden" value="<?php echo e($key); ?>">
        </label>
    </div>
       
    <ul class="">
        <?php $__currentLoopData = $label; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <label for="">
                <input class="<?php echo e($key); ?>" type="checkbox" name="roles[]" <?php if($user->roles || $user->user_role->role->roles): ?> <?php if(in_array($key2,$user->roles)||in_array($key2,$user->user_role->role->roles)): ?> checked <?php endif; ?> <?php endif; ?> value="<?php echo e($key2); ?>">
                <?php echo e($item); ?>

            </label>
        </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
  
</div>
<Button class="btn btn-success mt-5 mb-5 " type="submit"><?php echo e(__('dashboard.update roles')); ?>  </Button>
</form>
</div>
</div>

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
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\taef-company\resources\views/admin/dashboard/roles.blade.php ENDPATH**/ ?>