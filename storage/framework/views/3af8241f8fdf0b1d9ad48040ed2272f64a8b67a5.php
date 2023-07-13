
<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>
<br>
            <div class="content">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\Slider::class)): ?>
                <div>
                    <a class="btn btn-primary" href="<?php echo e(route('slider.add')); ?>"> <?php echo e(__('dashboard.add slider')); ?></a>
                </div>
                <?php endif; ?>
                <div class="container">
                 
                    <br>
                    <div class="page-title">
                        <h3><?php echo e(__('dashboard.sliders')); ?>

                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col"><?php echo e(__('dashboard.image')); ?></th>
                                    <th scope="col"><?php echo e(__('dashboard.title')); ?></th>
                                    <th scope="col"><?php echo e(__('dashboard.link')); ?></th>


                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $x =1; ?>
                                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td>
                                        <img width="100px" height="100px" src="<?php echo e(asset('uploads/'.$slider->image)); ?>" />
                                    </td>
                                    <td><?php echo e($slider->title); ?></td>
                                    <td><?php echo e($slider->link); ?></td>

                                    <td>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $slider)): ?>
                                        <a class="btn btn-outline-success btn-sm" href="<?php echo e(route('slider.edit',$slider->id)); ?> "><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        <?php endif; ?>
                                        
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $slider)): ?>
                                        <a class="btn btn-outline-danger btn-sm" href="<?php echo e(route('slider.destroy',$slider->id)); ?> "><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        <?php endif; ?>
                                       
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
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\taef-company\resources\views/admin/dashboard/sliders.blade.php ENDPATH**/ ?>