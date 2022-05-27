
<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>



<div class="content">
    <div class="container">
            
   

        <div class="card col-8 m-auto">
          <div class="card-body">
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-striped ">
                    <thead>
                      <tr>
                        <th scope="col"><?php echo e(__('front.name')); ?></th>
                        <td scope="col"><?php echo e($message->name); ?> </td>
                      </tr>
                     
                      <tr>
                        <th scope="col"><?php echo e(__('front.phone')); ?></th>
                        <td scope="col"> <?php echo e($message->phone); ?> </td>
                      </tr>
                     
                      <tr>
                        <th scope="col"><?php echo e(__('front.email')); ?></th>
                        <td scope="col"> <?php echo e($message->email); ?></td>
                      </tr>
                     
                     
                      <tr>
                        <th scope="col"><?php echo e(__('front.message')); ?></th>
                        <td scope="col"> <?php echo e($message->message); ?></td>
                      </tr>

                      
                    </thead>
                  
                  </table>
                  <div class="container  ">
                    <a href="<?php echo e(route('sendMessagePage2',$message->id)); ?>" class="btn btn-primary m-auto "><?php echo e(__('dashboard.send mail')); ?></a>
                    <a href="<?php echo e(route('sendPhoneMessagePage',$message->phone)); ?>" class="btn btn-primary m-auto "><?php echo e(__('dashboard.send phone mail')); ?></a>

                  </div>
            </div>
          </div>
        </div>
       
        </div>
        
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\taef-company\resources\views/admin/dashboard/show-message.blade.php ENDPATH**/ ?>