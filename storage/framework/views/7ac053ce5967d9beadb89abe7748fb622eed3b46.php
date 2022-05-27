<?php $__env->startSection('content'); ?>

    <!-- content -->
    <nav aria-label="breadcrumb">
        <h5 class="text-primary text-center  mt-5"><?php echo e(__('front.blog')); ?></h5>
        <ol class="breadcrumb bg-transparent  justify-content-center">
          <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><i class="fas fa-home"></i> <?php echo e(__('front.home')); ?> </a></li>
          <li class="breadcrumb-item"><a href="<?php echo e(route('blog')); ?>"><?php echo e(__('front.blog')); ?></a></li>
        </ol>
    </nav>
    <section class="container mb-5">
        <?php if($lastnews): ?>

        <div class="row  mb-5">
            <div class="col-12 card mb-3 bg-transparent shadow-none">
                <div class="row">
                  <div class="col-md-7 pl-5 order-md-1 order-12">

                    <div class="card-body">
                        <p class="card-text text-primary"><?php echo e(__('front.last news')); ?></p>
                        <h4 class="card-title">   <?php echo e($lastnews->title); ?>   </h4>
                        <p class="card-text text-muted">     <?php echo Str::words($lastnews->body,30); ?></p>
                        <div class="d-flex justify-content-between mt-4">
                            <a href="<?php echo e(route('blog-detaile',$lastnews->id)); ?>">
                                <span class="pl-2"> <?php echo e(__('front.show more')); ?></span>
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <p><smail class="text-muted"> <?php echo e($lastnews->created_at); ?></smail></p>
                        </div>
                    </div>

                  </div>
                  <div class="col-md-5 order-md-12 order-1">
                    <img class="card-img-top" src="<?php echo e(asset('uploads/'.$lastnews->image)); ?>" >
                  </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="row mb-5">
            <?php if($news): ?>

            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-md-4 col-sm-6 col-12 mb-4">
                <div class="card card-info h-100 rounded">
                    <img src="<?php echo e(asset('uploads/'.$new->image)); ?>" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">   <?php echo e($new->title); ?>   </h5>

                        <p class="card-text">
                            <?php echo Str::words($new->body,30); ?>

                        </p>
                        <a href="<?php echo e(route('blog-detaile',$new->id)); ?>"> <?php echo e(__('front.show more')); ?></a>
                    </div>
                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
        </div>
    </section>

    <!-- /content -->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('front.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\taef-company\resources\views/front/blog.blade.php ENDPATH**/ ?>