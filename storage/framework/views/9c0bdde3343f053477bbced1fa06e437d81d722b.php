
<?php $__env->startSection('content'); ?>


<div class="card mt-5 ml-5 mr-5 mb-5">
    <div class="card-header"> <h4>  <?php echo e(__('dashboard.add group')); ?></h4></div>
    <br>
    <div class="card-body">
        <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="<?php echo e(route('group.store')); ?>">
            <?php echo csrf_field(); ?>
<div class="form-group">

    <label for="name"><?php echo e(__('front.name')); ?></label>
    <input name="name" type="text" placeholder=" " class="form-control">
    <?php $__errorArgs = ['name'];
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


  <label for=""><?php echo e(__('dashboard.roles')); ?>:</label>

  <div class="row">
 

    
    <?php $__currentLoopData = config('abilities'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4">
    <div>
        <label for="">
            <input class="select_all" style="background: rgb(23, 182, 240)!important" type="checkbox" name="roles[]"  value="<?php echo e($key); ?>">
            <h4><?php echo e(__('dashboard.'.$key)); ?></h4>
            <input  class="key" type="hidden" value="<?php echo e($key); ?>">
        </label>
    </div>
       
    <ul class="">
        <?php $__currentLoopData = $label; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <label for="">
                <input class="<?php echo e($key); ?>" type="checkbox" name="roles[]"  value="<?php echo e($key2); ?>">
                <?php echo e($item); ?>

            </label>
        </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
  
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
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\taef-company\resources\views/admin/dashboard/add-group.blade.php ENDPATH**/ ?>