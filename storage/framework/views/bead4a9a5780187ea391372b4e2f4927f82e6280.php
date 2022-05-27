<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>
<br>
            <div class="content">
                <div class="container">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\Services::class)): ?>
                    <div>
                        <a class="btn btn-primary" href="<?php echo e(route('service.add')); ?>"><?php echo e(__('dashboard.add service')); ?> </a>
                    </div>
                    <?php endif; ?>

                    <br>

                    <div class="page-title">
                        <h3><?php echo e(__('front.services')); ?>

                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col"><?php echo e(__('dashboard.image')); ?></th>
                                    <th scope="col"> (ar)<?php echo e(__('dashboard.title')); ?></th>
                                    <th scope="col"> (en)<?php echo e(__('dashboard.title')); ?></th>
                                    <th scope="col">(ar)<?php echo e(__('dashboard.detailes')); ?></th>
                                    <th scope="col">(en)<?php echo e(__('dashboard.detailes')); ?></th>

                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $x =1; ?>
                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th class="" scope="row"><?php  echo $x++; ?></th>
                                    <td>
                                        <img width="50px" height="50px" src="<?php echo e(asset('uploads/'.$service->image)); ?>" />
                                    </td>
                                    <td class="col-2"><?php echo e($service->artitle); ?></td>
                                    <td class="col-2"><?php echo e($service->entitle); ?></td>
                                    <td class="col-3"><?php echo Str::words( $service->ardes,5); ?></td>
                                    <td class="col-3"><?php echo Str::words( $service->endes,5); ?></td>


                                    <td class="col-3">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $service)): ?>
                                        <a class="btn btn-outline-success btn-sm" href="<?php echo e(route('service.edit',$service->id)); ?> "><i class="fas fa-edit"></i></a>
                                        <?php endif; ?>

                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $service)): ?>
                                        <a class="btn btn-outline-danger btn-sm" href="<?php echo e(route('service.destroy',$service->id)); ?> "><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
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

<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\taef-company\resources\views/admin/dashboard/services.blade.php ENDPATH**/ ?>