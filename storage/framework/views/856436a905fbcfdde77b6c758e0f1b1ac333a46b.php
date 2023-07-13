   

<?php $__env->startSection('content'); ?>
<nav aria-label="breadcrumb">
    <h5 class="text-primary text-center  mt-5"><?php echo e(__('front.services')); ?></h5>
    <ol class="breadcrumb bg-transparent  justify-content-center">
      <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><i class="fas fa-home"></i> <?php echo e(__('front.home')); ?> </a></li>
      <li class="breadcrumb-item"><a href="<?php echo e(route('front.services')); ?>"><?php echo e(__('front.services')); ?>ا</a></li>
    </ol>
</nav>
    <section class="container mb-5">
         
        <h5 class="text-center text-primary mb-4"> <?php echo e(__('front.features of services')); ?></h5>
        <div class="row mb-5">
            <div class="col-md-4 col-sm-6 col-12">
                <div class="card bg-transparent h-100 text-center shadow-none">
                    <div class=" d-flex align-items-center justify-content-center pt-4  rounded">
                        <img src="<?php echo e(asset('/assets/image/surface1.png')); ?>">
                    </div>
                    <div class="card-body">
                    <p class="card-text text-center">  <?php echo e(__('front.quality')); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="card bg-transparent h-100 text-center shadow-none">
                    <div class=" d-flex align-items-center justify-content-center pt-4  rounded">
                        <img src="<?php echo e(asset('/assets/image/Icon material-access-time.png')); ?>">
                    </div>
                    <div class="card-body">
                    <p class="card-text text-center">   <?php echo e(__('front.speed')); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="card bg-transparent h-100 text-center shadow-none">
                    <div class=" d-flex align-items-center justify-content-center pt-4  rounded">
                        <img src="<?php echo e(asset('/assets/image/usability.png')); ?>">
                    </div>
                    <div class="card-body">
                    <p class="card-text text-center"> <?php echo e(__('front.easy')); ?> </p>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="text-center mb-3"><?php echo e(__('front.services')); ?> </h5>
        <h5 class="text-center text-primary mb-4"><?php echo e(__('front.part of the world')); ?></h5>
        <div class="row mb-5 m-auto">
          
           
          <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
            <div class="col-md-4 col-sm-6 col-12 mb-4">
                <div class="card bg-transparent h-100 text-center shadow-none">
                    <div class=" d-flex align-items-center justify-content-center pt-4  rounded">
                        <img width="150px" height="150px" src="<?php echo e(asset('uploads/'.$service->image)); ?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo e($service->title); ?> </h5>
                        <p class="card-text text-center">
                            <?php echo Str::words($service->des,30); ?>     

                        </p>

                    </div>
                    <div class="d-flex justify-content-between mx-md-5 mx-2">
                        <a href="<?php echo e(route('front.salescontact',$service->id)); ?>" class="btn btn-shadow text-primary rounded-pill"> <?php echo e(__('front.subscribe now')); ?> </a>
                        <a href="<?php echo e(route('front.services-show',$service->id)); ?>" class="btn text-black shadow-none"> <?php echo e(__('front.more info')); ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($services->links()); ?>


        </div>

    </section>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\taef-company\resources\views/front/our_solutions.blade.php ENDPATH**/ ?>