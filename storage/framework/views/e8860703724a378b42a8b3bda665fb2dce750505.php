

<?php $__env->startSection('content'); ?>

    <section class="overlay mb-5 bg-primary">
        <img src="../../assets/image/about-us/Mask Group 22.png" class="img-fluid" alt="">
        <div class="overlay-text w-100">
            <h4 class="text-center mb-md-2 mb-0"><?php echo e(__('front.services')); ?></h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb  justify-content-center  mb-md-2 mb-0">
                  <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><i class="fas fa-home"></i> <?php echo e(__('front.home')); ?> </a></li>
                  <li class="breadcrumb-item"><a href="<?php echo e(route('front.services')); ?>"><?php echo e(__('front.services')); ?></a></li>
                  <li class="breadcrumb-item active text-white" aria-current="page"><?php echo e($service->title); ?>   </li>
                </ol>
            </nav>
            
        </div>
    </section>
    <section class="container mb-5 ">
        <!-- <img src="../../assets/image/Mask Group 20.png" class="img-fluid mx-auto d-md-block d-none" alt=""> -->
        <div class=" w-100">
            <h5 class="text-center mb-md-5"><?php echo e(__('front.part of the world')); ?> </h5>
            <div class="row mb-5 ">
                <div class="col-12  align-self-center ">
                <div class="row no-gutters">
                    <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text">

                            <?php echo e(__('front.services page brief')); ?>

                        </p>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <img src="<?php echo e(asset('/assets/image/Asset 1.png')); ?>"class='rounded img-fluid w-100'>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
  
    <section class="container mb-5">
        <h4 class="text-primary mb-3"><?php echo e(__('front.service description')); ?> </h4>
        <p>
            <?php echo $service->des; ?>

        </p>
        
        <div>
            <div class=" d-flex align-items-center justify-content-center py-4  rounded">
                <img src="../../assets/image/Group 354.png">
            </div>
            <h5 class="text-center"><?php echo e(__('front.ready to subscribe')); ?></h5>
            <p class="text-center"><?php echo e(__('front.good subscribe')); ?> </p>
            <div class="d-flex justify-content-center my-3">
                <a href="<?php echo e(route('front.salescontact',$service->id)); ?>" class="btn btn-lg btn-primary text-white rounded-pill mx-md-5 mx-0 px-3"> <?php echo e(__('front.subscribe now')); ?></a>
                <a href="<?php echo e(route('front.contact_us')); ?>" class="btn btn-lg btn-shadow text-primary rounded-pill px-3"> <?php echo e(__('front.contact us')); ?></a>
            </div>
        </div>
    </section>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\taef-company\resources\views/front/our_solutions_2.blade.php ENDPATH**/ ?>