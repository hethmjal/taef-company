
<?php $__env->startSection('content'); ?>
<!-- content -->
<div class="content">
    <?php if(session('success')): ?>
    <div class="container form-group alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
    <nav aria-label="breadcrumb">

        <h4 class="text-primary text-center  mt-5"> <?php echo e(__('front.contact us')); ?> </h4>
            <ol class="breadcrumb  justify-content-center  mb-md-2 mb-0">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><i class="fas fa-home"></i> <?php echo e(__('front.home')); ?> </a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('front.contact_us')); ?>"> <?php echo e(__('front.contact us')); ?></a></li>
            </ol>
            </nav>
    <div class="container w-md-75">
        <div class=" bg-light-rounded d-flex justify-content-center mx-md-5 p-5 ">
            <div class=" align-items-center">
                <h5 class="font-weight-bold text-center"><?php echo e(__('front.good connection')); ?></h5>
                <div class="my-5 text-center">
                    <form action="<?php echo e(route('front.storemessage')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group mb-4">
                            <input type="text" class="form-control in-shadow border-0 rounded-pill" placeholder=" <?php echo e(__('front.name')); ?> "
                                name="name" required>
                        </div>
                        <div class="form-group mb-4">
                            <input type="text" dir='auto' name="email" class="form-control in-shadow border-0 rounded-pill"
                                placeholder=' <?php echo e(__('front.email')); ?>' required>
                        </div>
                        <div class="form-group mb-4">
                            <input type="phone" class="form-control in-shadow border-0 rounded-pill"
                                placeholder=' <?php echo e(__('front.phone')); ?>' name="phone">
                        </div>
                        <div class="form-group mb-4">
                            <textarea class="form-control in-shadow border-0 rounded" placeholder="<?php echo e(__('front.message')); ?>" name="message" rows="3"
                                required></textarea>
                        </div>
                        <?php echo NoCaptcha::display(); ?>

                                <?php $__errorArgs = ['g-recaptcha-response'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="invalid-feedback d-block"> <?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit"
                                class="btn btn-lg btn-primary rounded-pill mx-auto px-4 text-white"><?php echo e(__('front.send')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\taef-company\resources\views/front/contact_us.blade.php ENDPATH**/ ?>