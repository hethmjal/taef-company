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
                        <td scope="col"><?php echo e($order->name); ?> </td>
                      </tr>
                      <tr>
                        <th scope="col"><?php echo e(__('front.facility name')); ?></th>
                        <td scope="col"><?php echo e($order->facility_name); ?> </td>
                      </tr>
                      <tr>
                        <th scope="col"><?php echo e(__('front.phone')); ?></th>
                        <td scope="col"> <?php echo e($order->phone); ?> </td>
                      </tr>

                      <tr>
                        <th scope="col"><?php echo e(__('front.email')); ?></th>
                        <td scope="col"> <?php echo e($order->email); ?></td>
                      </tr>
                      <tr>
                        <th scope="col"><?php echo e(__('front.city')); ?></th>
                        <td scope="col"> <?php echo e($order->city); ?></td>
                      </tr>
                      <tr>
                        <th scope="col"><?php echo e(__('dashboard.service')); ?></th>
                        <td><?php echo e($order->service_title); ?></td>
                      </tr>
                      <tr>
                        <th scope="col"><?php echo e(__('front.message')); ?></th>
                        <td scope="col"> <?php echo e($order->message); ?></td>
                      </tr>

                      <tr>
                        <th scope="col"><?php echo e(__('dashboard.status')); ?></th>
                        <form action="<?php echo e(route('change-status',$order->id)); ?>" method="post">
                          <?php echo csrf_field(); ?>

                        <td scope="col">
                           <select class="form-control" name="status" id="">

                          <option value="new"><?php echo e(__('dashboard.new')); ?></option>
                          <option value="under review"><?php echo e(__('dashboard.under review')); ?></option>
                          <option value="underway"><?php echo e(__('dashboard.underway')); ?></option>
                          <option value="unacceptable"><?php echo e(__('dashboard.unacceptable')); ?></option>
                          <option value="canceled"><?php echo e(__('dashboard.canceled')); ?></option>
                          <option value="complete"><?php echo e(__('dashboard.complete')); ?></option>
                        </select>
                      </td>



                        <td scope="col">
                          <input type="submit" value="<?php echo e(__('dashboard.change status')); ?>" class="btn btn-primary">

                        </td>
                      </form>

                      </tr>
                    </thead>

                  </table>
                  <div class="container  ">
                    <a href="<?php echo e(route('sendMessagePage2',$order->id)); ?>" class="btn btn-primary m-auto "><?php echo e(__('dashboard.send mail')); ?></a>
                    <a href="<?php echo e(route('sendPhoneMessagePage',$order->phone)); ?>" class="btn btn-primary m-auto "><?php echo e(__('dashboard.send phone mail')); ?></a>

                  </div>
            </div>
          </div>
        </div>

        </div>

    </div>
</div>

<?php $__env->startPush('js'); ?>
<script>
  $("select").val(`<?php echo $order->status ;?>`).change();

</script>
<?php $__env->stopPush(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\taef-company\resources\views/admin/dashboard/show-orders.blade.php ENDPATH**/ ?>