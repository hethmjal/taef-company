

<?php $__env->startSection('content'); ?>

<nav aria-label="breadcrumb">
    <h4 class="text-primary text-center  mt-5"><?php echo e(__('front.about us')); ?> </h4>
        <ol class="breadcrumb  justify-content-center  mb-md-2 mb-0">
          <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><i class="fas fa-home"></i> <?php echo e(__('front.home')); ?> </a></li>
          <li class="breadcrumb-item"><a href="<?php echo e(route('front.aboutus')); ?>"><?php echo e(__('front.about us')); ?> </a></li>
        </ol>
    </nav>
    <section class="container mb-5">
        <div class="row mb-5">
            <div class="col-12 ">
            <div class="row no-gutters">
                <div class="col-md-6 order-md-1 order-12">
                <div class="card-body">
                    <h3 class="card-title text-primary mb-4"><?php echo e(__('dashboard.web_title')); ?> </h3>
                    <p class="card-text">
                        <?php if($aboutus): ?>
                        <?php echo e($aboutus->body); ?>

                        <?php endif; ?>
                    </p>
                </div>
                </div>
                <div class="col-md-6 order-md-12 order-1">
                    <?php if($aboutus): ?>
                    <img src="<?php echo e(asset('uploads/'.$aboutus->image)); ?>"class='rounded img-fluid'>
                    <?php endif; ?>

                </div>
            </div>
            </div>
        </div>
        <h5 class="text-center text-primary mb-5"> <?php echo e(__('front.part of the world')); ?>    </h5>
        <div class="row mb-5">
            <?php if($vision): ?>

            <div class="col-12">
                <div class="card mb-3 p-md-4 p-2">
                    <div class="row no-gutters">
                      <div class="col-md-1 col-2 mt-3">
                        <img src="<?php echo e(asset('/assets/image/about-us/Ellipse 77.png')); ?>" width="100%">
                      </div>
                      <div class="col-md-11 col-10 px-md-3 px-0">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo e($vision->title); ?></h5>
                          <p class="card-text"><?php echo e($vision->body); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <?php endif; ?>
            <?php if($message): ?>

            <div class="col-12">
                <div class="card mb-3 p-md-4 p-2">
                    <div class="row no-gutters">
                      <div class="col-md-1 col-2 mt-3">
                        <img src="<?php echo e(asset('/assets/image/about-us/Group 345.png')); ?>" width="100%">
                      </div>
                      <div class="col-md-11 col-10 px-md-3 px-0">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($message->title); ?></h5>
                            <p class="card-text"><?php echo e($message->body); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <?php endif; ?>
            <?php if($goal): ?>

            <div class="col-12">
                <div class="card mb-3 p-md-4 p-2">
                    <div class="row no-gutters">
                      <div class="col-md-1 col-2 mt-3">
                        <img src="<?php echo e(asset('/assets/image/about-us/Group 348.png')); ?>" width="100%">
                      </div>
                      <div class="col-md-11 col-10 px-md-3 px-0">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($goal->title); ?></h5>
                            <p class="card-text"><?php echo e($goal->body); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <section>
        <div class="bg-light mb-5">
            <div class="container">
                <div class="row py-3">

                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card bg-transparent text-center shadow-none">
                        <div class=" d-flex align-items-center justify-content-center pt-4  rounded">
                            <div class=" bg-white rounded-circle p-3 shadow"> <span  class=""><img src="<?php echo e(asset('uploads/'.$image->image)); ?>" width='63px'></span> </div>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title text-primary text-center"><?php echo e($image->title); ?></h5>
                        <p class="card-text text-center">  <?php echo e($image->body); ?> </p>
                        </div>
                    </div>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </section>
    <section  class="container mb-5">
        <div class="row">
            <div class="col-md-9 col-12">
                <h4 class="text-primary mb-3"> <?php echo e(__('front.ambition')); ?></h4>
                <p>  <?php echo e(__('front.ambition2')); ?> </p>
            </div>
            <div class="col-md-3 col-12 my-auto">
                <a href="<?php echo e(route('front.contact_us')); ?>" class="btn btn-lg btn-primary rounded-pill text-white px-3 "><?php echo e(__('front.contact us')); ?></a>
            </div>
        </div>
    </section>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('front.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\taef-company\resources\views/front/about_us.blade.php ENDPATH**/ ?>