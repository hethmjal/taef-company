

<?php $__env->startSection('content'); ?>
    <!-- content -->
    <nav aria-label="breadcrumb">
        <h5 class="text-primary text-center  mt-5"><?php echo e(__('front.partner')); ?></h5>
        <ol class="breadcrumb bg-transparent  justify-content-center">
          <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><i class="fas fa-home"></i> <?php echo e(__('front.home')); ?> </a></li>
          <li class="breadcrumb-item"><a href="<?php echo e(route('front.partners')); ?>"><?php echo e(__('front.partner')); ?></a></li>
          <li class="breadcrumb-item"><a href="<?php echo e($partner->link); ?>"><?php echo e($partner->name); ?></a></li>
        </ol>
    </nav>

    <section class="container mb-5">
        <div class="row mb-5">
            <div class="col-12 ">
            <div class="row no-gutters">
                <div class="col-md-8 order-md-1 order-12">
                <div class="card-body">
                    <h3 class="card-title text-primary mb-5"><?php echo e($partner->name); ?></h3>
                    <p class="card-text">
                        <?php echo $partner->des; ?>

                    </p>
                    <a href="<?php echo e($partner->link); ?>" target="blank"  class="btn btn-lg btn-shadow text-primary rounded-pill px-3"> <?php echo e(__('front.link')); ?>  </a>
                </div>
                </div>
                <div class="col-md-4 text-center order-md-12 order-1">
                <img src="<?php echo e(asset('uploads/'.$partner->logo)); ?>"class='rounded img-fluid'>
                </div>
            </div>
            </div>
        </div>
        <div class="row mb-5">
            <?php if($partner->images->count()>0): ?>
            <div class="col-md-5 col-12">
                <img src="<?php echo e(asset('uploads/'.$partner->images[0]->path)); ?>"  width="400px" height="300px">
            </div>  
            <?php endif; ?>
             

               
            <div class="col-md-7">
                <div class="row">
                    <?php $__currentLoopData = $partner->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($loop->index !=0): ?>
                        
                    <div class="col-md-6 mb-1"><img src="<?php echo e(asset('uploads/'.$image->path)); ?>"  width="200px" height="200px"></div>
                    <?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-md-9 col-12">
                <h4 class="text-primary mb-3"><?php echo e(__('front.ambition')); ?></h4>
                <p><?php echo e(__('front.ambition2')); ?></p>
            </div>
            <div class="col-md-3 col-12 my-auto">
                <a href="<?php echo e(route('front.contact_us')); ?>" class="btn btn-lg btn-primary rounded-pill text-white px-3 "><?php echo e(__('front.contact us')); ?></a>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\taef-company\resources\views/front/our_partners2.blade.php ENDPATH**/ ?>