<?php $__env->startSection('content'); ?>


<?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>

    <?php
        $lang =LaravelLocalization::setLocale();
    ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">

          <?php if($slid): ?>
          <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo e($slid->id); ?>" class="active"></li>
          <?php endif; ?>

          <?php if($sliders): ?>
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo e($slider->id); ?>" class="active"></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>




        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active ">
                <?php if($slid): ?>

                <a href="<?php echo e($slid->link); ?>">
                  <img src="<?php echo e(asset('uploads/'.$slid->image)); ?>" class="d-block  w-100" width="1108px" height="428" alt="...">
                </a>
                <?php endif; ?>

              </div>
              <?php if($sliders): ?>

            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="carousel-item  ">
            <a href="<?php echo e($slider->link); ?>" target="blank">

            <img src="<?php echo e(asset('uploads/'.$slider->image)); ?>"  class="d-block  w-100" width="1108px" height="428" alt="...">
            </a>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /slider -->

    <div class="container">
        <div class="my-5 mx-5">
            <h5 class="text-primary text-center"><?php echo e(__('dashboard.web_title')); ?> </h5>
            <?php if($brief1): ?>
            <p class="text-center">  <?php echo $brief1->body; ?>  </p>
                     <?php endif; ?>

        </div>

    </div>
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
    <div class="container ">
        <div class="my-5 mx-5">
            <h5 class="text-primary text-center"> <?php echo e(__('front.services')); ?></h5>
            <p class="text-center w-md-75 m-auto "><?php echo e(__('front.services description')); ?></p>
        </div>
        <div class="row m-auto">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-md-3 col-sm-6  col-12mb-4 m-auto">
                <div class="card">
                    <div class="rounded pt-4 d-flex align-items-center  justify-content-center">
                        <img src="<?php echo e(asset('uploads/'.$service->image)); ?>" width="100px" alt="" class="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title text-center text-primary">

                             <?php echo e($service->title); ?>

                        </h5>
                        <p class="card-text text-center">
                            <?php echo Str::words($service->des,20); ?>

                                           </p>
                        <a href="<?php echo e(route('front.services-show',$service->id)); ?>" ><?php echo e(__('front.about service')); ?> <i class="fas fa-chevron-left"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>

    <div class="bg-gray mb-5 mt-3">
        <div class="container">
            <div class="row  py-4">
                <div class="col-12 card mb-3 bg-transparent shadow-none">
                    <?php if($news): ?>

                    <div class="row">
                      <div class="col-md-7 pl-5 order-md-1 order-12">

                        <div class="card-body">
                            <p class="card-text text-primary"><?php echo e(__('front.last news')); ?></p>
                            <h4 class="card-title">   <?php echo e($news->title); ?>   </h4>
                            <p class="card-text text-muted">     <?php echo Str::words($news->body,30); ?></p>
                            <div class="d-flex justify-content-between mt-4">
                                <a href="<?php echo e(route('blog-detaile',$news->id)); ?>">
                                    <span class="pl-2"> <?php echo e(__('front.show more')); ?></span>
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <p><small class="text-muted"> <?php echo e($news->created_at); ?></small></p>
                            </div>
                        </div>

                      </div>
                      <div class="col-md-5 order-md-12 order-1">
                        <img class="card-img-top" src="<?php echo e(asset('uploads/'.$news->image)); ?>" >
                      </div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

    <div class=" d-flex justify-content-center align-items-center w-100" >
        <div class="p-3">
        <h5 class="text-primary text-center"><?php echo e(__('front.subscribe with email')); ?></h5>
        <p class="w-75 text-center mx-auto mb-4"><?php echo e(__('front.subscribe with email2')); ?></p>
        <form class="d-flex my-2 justify-content-center" action="<?php echo e(route('maillist-sub')); ?> " method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3 subscribe">
                <input type="text" name="email" class="form-control rounded-pill bg-transparent subscribe-input form-control-lg" placeholder="<?php echo e(__('front.enter email')); ?>" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <button class="btn btn-primary rounded-pill subscribe-button px-4 btn-lg" type="submit" id="button-addon1"><?php echo e(__('front.subscribe')); ?></button>
            </div>
        </form>
        </div>
    </div>
  
    <!-- /content -->
    <?php $__env->startPush('js'); ?>


    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\taef-company\resources\views/front/index.blade.php ENDPATH**/ ?>