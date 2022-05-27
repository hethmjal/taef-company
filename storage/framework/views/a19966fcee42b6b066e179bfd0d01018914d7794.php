
<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>
<br>
            <div class="content">
                <div class="container">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\News::class)): ?>
                        
                    <div>
                        <a class="btn btn-primary" href="<?php echo e(route('news.add')); ?>"> <?php echo e(__('dashboard.add news')); ?></a>
                    </div>
                    <?php endif; ?>

                    <br>
                    <div class="page-title">
                        <h3><?php echo e(__('dashboard.news')); ?>

                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col"> (ar)<?php echo e(__('dashboard.title')); ?></th>
                                    <th scope="col"> (en)<?php echo e(__('dashboard.title')); ?></th>
                                    <th scope="col"><?php echo e(__('dashboard.image')); ?></th>
                                    <th scope="col">(ar)<?php echo e(__('dashboard.detailes')); ?></th>
                                    <th scope="col">(en)<?php echo e(__('dashboard.detailes')); ?></th>
                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $x =1; ?>
                                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td><?php echo e($new->artitle); ?></td>
                                    <td><?php echo e($new->entitle); ?></td>

                                    <td>
                                        <img width="100px" height="100px" src="<?php echo e(asset('uploads/'.$new->image)); ?>" />
                                    </td>
                                    <td><?php echo Str::words( $new->arbody,10); ?></td>
                                    <td><?php echo Str::words( $new->enbody,10); ?></td>

                                    <td>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $new)): ?>
                                        <a class="btn btn-outline-success btn-sm" href="<?php echo e(route('news.edit',$new->id)); ?> "><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <?php endif; ?>

                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete',$new )): ?>
                                        <a class="btn btn-outline-danger btn-sm" href="<?php echo e(route('news.destroy',$new->id)); ?> "><i class="fa fa-trash" aria-hidden="true"></i></a>
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
<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\taef-company\resources\views/admin/dashboard/news.blade.php ENDPATH**/ ?>