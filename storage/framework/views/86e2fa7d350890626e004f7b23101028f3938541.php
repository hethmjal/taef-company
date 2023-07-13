
<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>
<br>
            <div class="content">
                <div class="container">
                   
                    <br>
                    <div class="page-title">
                        <h3><?php echo e(__('dashboard.messages')); ?>

                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col"><?php echo e(__('front.name')); ?></th>
                                    <th scope="col"> <?php echo e(__('front.email')); ?></th>
                                    <th scope="col"> <?php echo e(__('front.phone')); ?></th>
                                    <th scope="col"><?php echo e(__('front.message')); ?></th>

                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $x =1; ?>
                                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                  
                                    <td><?php echo e($message->name); ?></td>
                                    <td><?php echo e($message->email); ?></td>
                                    <td><?php echo e($message->phone); ?></td>

                                    <td><?php echo e(Str::words($message->message,10)); ?></td>
                                    <td>
                                        <a class="btn btn-primary"  href="<?php echo e(route('dashboard.show-messages',$message->id)); ?>"> <?php echo e(__('dashboard.more2')); ?></a>
            
                                    </td>
                                  </tr>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\taef-company\resources\views/admin/dashboard/messages.blade.php ENDPATH**/ ?>