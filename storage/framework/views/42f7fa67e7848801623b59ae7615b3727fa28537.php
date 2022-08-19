
<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>
<br>
            <div class="content">
                <div class="container">
                   
                    <br>
                    <div class="page-title">
                        <div class="card-header"> <h4> <?php echo e(__('dashboard.send mail')); ?> </h4></div>

                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <form action="<?php echo e(route('toGroupMailPage')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col"><?php echo e(__('front.email')); ?></th>

                                    <th scope="col"><?php echo e(__('dashboard.select')); ?></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $x =1; ?>
                                <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td><?php echo e($email->email); ?></td>
                                    <td>
                                        <input type="checkbox" class="checkbox" value="<?php echo e($email->email); ?>" name="emails[]" >
                                    </td>

                                  </tr>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                                </tbody>

                              </table>
                              <div class=" col-4 m-auto">
                                <label for="checkbox"><?php echo e(__('dashboard.select all')); ?></label>
                              <input type="checkbox" id="select_all" class="checkbox" value="" name="" >
                                  <input type="submit" class="btn btn-primary" value="<?php echo e(__('dashboard.write the message')); ?>">
                            </div>
                        </form>
                        </div>
                        
                    </div>
                </div>
               
            </div>
        </div>
        
    </div>
    <?php $__env->startPush('js'); ?>
        <script>
            $('#select_all').change(function() {
        if($(this).is(':checked')) {
            $("input[type='checkbox']").attr('checked', 'checked');
        } else {
            $("input[type='checkbox']").removeAttr('checked');
        }
    });
        $("input[type='checkbox']").not('#select_all').change( function() {
        $('#select_all').removeAttr('checked');
    });
        </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\taef-company\resources\views/admin/dashboard/mailinglist.blade.php ENDPATH**/ ?>