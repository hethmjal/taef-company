   

<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>
<div class="content">
        <nav aria-label="breadcrumb">
            <h4 class="text-center mb-md-2 mb-0"><?php echo e(__('front.services')); ?></h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb  justify-content-center  mb-md-2 mb-0">
                  <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><i class="fas fa-home"></i> <?php echo e(__('front.home')); ?> </a></li>
                  <li class="breadcrumb-item"><a href="<?php echo e(route('front.services')); ?>"><?php echo e(__('front.services')); ?></a></li>
              <li class="breadcrumb-item"><?php echo e(__('front.subscribe now')); ?></li>
            </ol>
        </nav>
        <div class="container w-md-75">
            <div class=" bg-light-rounded d-flex justify-content-center mx-md-5 p-5 ">
                <div class=" align-items-center">
                    <h4 class="font-weight-bold text-center"><?php echo e(__('front.contact sales')); ?></h4>
                    <p class="text-center"><?php echo e(__('front.fill')); ?></p>
                    <div class="my-5 ">
                        <form action="<?php echo e(route('front.storeorder')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="service_id" value="<?php echo e($service->id); ?>">
                            <div class="row">
                            <div class="col-12 mb-4">
                                <span class="text-primary h5 mx-2"><?php echo e(__('front.info')); ?></span>
                            </div>
                            <div class="col-12 form-group mb-4">
                                <input type="text" class="form-control in-shadow border-0 rounded-pill" value="<?php echo e(old('name')); ?>" name="name" placeholder="<?php echo e(__('front.name')); ?>" id="name" >
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="invalid-feedback d-block"> <?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-12 form-group mb-4">
                                <input type="text" class="form-control in-shadow border-0 rounded-pill"  value="<?php echo e(old('job_title')); ?>" name="job_title" placeholder='<?php echo e(__('front.job title')); ?>' >
                                <?php $__errorArgs = ['job_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="invalid-feedback d-block"> <?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-12 form-group mb-4">
                                <input type="text"dir='auto' class="form-control in-shadow border-0 rounded-pill"  value="<?php echo e(old('email')); ?>" name="email" placeholder='<?php echo e(__('front.email')); ?>' >
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="invalid-feedback d-block"> <?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-12 form-group mb-4">
                                <input class="form-control in-shadow border-0 rounded-pill" type="tel" value="<?php echo e(old('phone')); ?>" id="phone" name="phone" placeholder="">

                               
                            </div>

                            <div class="col-12 form-group mb-4">
                                <input type="text" class="form-control in-shadow border-0 rounded-pill" value="<?php echo e(old('facility_name')); ?>" name="facility_name" placeholder='<?php echo e(__('front.facility name')); ?>' id="phone">
                                <?php $__errorArgs = ['facility_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="invalid-feedback d-block"> <?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-12 form-group mb-4">
                                <input type="text" class="form-control in-shadow border-0 rounded-pill" value="<?php echo e(old('city')); ?>"  name="city" placeholder='<?php echo e(__('front.city')); ?>' id="phone">
                                <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="invalid-feedback d-block"> <?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            
                          
                           

                           
                          
                            <div class="col-12 my-4">
                                <span class="text-primary h5 mx-2"><?php echo e(__('front.inquire')); ?></span>
                            </div>
                            <div class="col-12 form-group mb-4">
                                <textarea class="form-control in-shadow border-0 rounded" name="message" placeholder="<?php echo e(__('front.any question')); ?>" rows="3"><?php echo e(old('message')); ?></textarea>
                            </div>
                            <div class="col-12 form-group mb-4">
                                <p class="mb-4">
                                    <?php echo e(__('front.can subscribe')); ?>

                                </p>
                                <div class="custom-control custom-radio custom-control-inline w-50">
                                    <input type="radio" id="customRadioInline1" value="yes" name="subscribe" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1"><?php echo e(__('front.yes')); ?></label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" value="no" name="subscribe" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2"><?php echo e(__('front.no')); ?></label>
                                </div>
                            </div>
                              
                                
                         
                            
                           


                            <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-lg btn-primary rounded-pill mx-auto px-4 text-white"><?php echo e(__('front.subscribe')); ?></button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('/front/js/intlTelInput.js')); ?>"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>



    <script>
        
        var input = document.querySelector("#phone");
window.intlTelInput(input, {

  utilsScript: "<?php echo e(asset('/front/js/utils.js')); ?>" // just for formatting/placeholders etc
});





      var input = document.querySelector("#phone");
      window.intlTelInput(input, {
        // any initialisation options go here
        hiddenInput: "full_phone",
        utilsScript: "<?php echo e(asset('/front/js/utils.js')); ?>",
        customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
      console.log(selectedCountryData.iso2);
      if (selectedCountryData.iso2=='sa') {
        return "512345678";
      }else{
        return selectedCountryPlaceholder;
      }
    
  },
      });

     
      


   
    </script>
<script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(config('services.recaptcha.sitekey')); ?>"></script>
<script>
         grecaptcha.ready(function() {
             grecaptcha.execute('<?php echo e(config('services.recaptcha.sitekey')); ?>', {action: 'contact'}).then(function(token) {
                if (token) {
                  document.getElementById('recaptcha').value = token;
                }
             });
         });
</script>
    <?php $__env->stopPush(); ?>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.partials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\taef-company\resources\views/front/sales_contact.blade.php ENDPATH**/ ?>