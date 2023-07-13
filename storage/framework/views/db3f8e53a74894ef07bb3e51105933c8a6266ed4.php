

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container">
    
         </div>
        <div class="container">
            <div class="d-flex justify-content-center p-3">
                <div class=" align-items-center">
                    <div class="my-md-5 my-4 text-center">
                        <span><img src="<?php echo e(asset('/assets/image/undraw_Browser_stats_re_j7wy.png')); ?>" width="100%"></span>
                    </div>
                    <h3 class="font-weight-bold text-center"> <?php echo e(__('front.soon')); ?> </h3>
                    
                </div>
            </div>
        </div>
    </div>
 
    <?php $__env->startPush('js'); ?>
    <script>
        var _token = "<?php echo e(csrf_token()); ?>";
    </script>
    <script src="<?php echo e(asset('js2/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js2/recorder.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\taef-company\resources\views/front/soon.blade.php ENDPATH**/ ?>