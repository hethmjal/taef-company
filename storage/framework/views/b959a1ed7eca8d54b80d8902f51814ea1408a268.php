<!DOCTYPE html>
<html lang="<?php echo e(LaravelLocalization::setLocale()); ?>" dir="<?php echo e(LaravelLocalization::getCurrentLocaleDirection()); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="shortcut icon" href="<?php echo e(asset('/dist/img/logo1.png')); ?>" type="image/x-icon">
    <?php
    $items = App\Models\Marketing::get();

?>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $item->code; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <title> <?php echo e(__('dashboard.web_title')); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <?php if(LaravelLocalization::setLocale() == 'ar'): ?>
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/bootstrap-rtl.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/custom.css')); ?>">


    <?php else: ?>
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/custom_en.css')); ?>">

    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(asset('/front/css/intlTelInput.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/font-awesome.min.css')); ?>">
    <?php echo ReCaptcha::htmlScriptTagJsApi(); ?>



<style>
    .iti{
        width: 100%;
    }

    .iti__flag {background-image: url("/front/img/flags.png");}

@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
  .iti__flag {background-image: url("/font/img/flags@2x.png");}
}
</style>
</head>
<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a href="<?php echo e(url('/')); ?>" class="navbar-brand  ">
                <?php if(LaravelLocalization::setLocale() == 'ar'): ?>

                <img src="<?php echo e(asset('/assets/image/tif-logo.png')); ?> " width="150px"  alt="logo">

                <?php else: ?>
                <img src="<?php echo e(asset('/assets/image/LOGO-TIF-EN 1.png')); ?>" style="margin-right: 5rem" width="150px" alt="logo">

                <?php endif; ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">


                    <li class="nav-item active">
                        <a href="<?php echo e(route('home')); ?>" class="nav-link <?php if(request()->routeis('home')): ?> active text-primary <?php endif; ?> "><?php echo e(__('front.home')); ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('front.aboutus')); ?>" class="nav-link <?php if(request()->routeis('front.aboutus')): ?> active text-primary <?php endif; ?> "><?php echo e(__('front.about us')); ?> </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('front.services')); ?>" class="nav-link <?php if(request()->routeis('front.services')): ?> active text-primary <?php endif; ?> "><?php echo e(__('front.services')); ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('front.partners')); ?>" class="nav-link  <?php if(request()->routeis('front.partners')): ?> active text-primary <?php endif; ?> "><?php echo e(__('front.partner')); ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('blog')); ?>" class="nav-link  <?php if(request()->routeis('blog')): ?> active text-primary <?php endif; ?>"><?php echo e(__('front.blog')); ?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarHR" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo e(__('front.hr')); ?>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarHR">
                            <a class="dropdown-item" href="<?php echo e(route('soon')); ?>"  > <?php echo e(__('front.recruitment')); ?></a>
                            <a class="dropdown-item" href="<?php echo e(route('soon')); ?>" ><?php echo e(__('front.job training')); ?></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('front.contact_us')); ?>" class="nav-link <?php if(request()->routeis('front.contact_us')): ?> active text-primary <?php endif; ?> ">  <?php echo e(__('front.contact us')); ?></a>
                    </li>
                    <li class="nav-item bg-primary mx-2">

                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php if(LaravelLocalization::setLocale() != $localeCode): ?>
                                    <a class="nav-link  text-white" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                     <?php echo e($localeCode); ?>

                                 </a>
                                <?php endif; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </li>
                    <li class="nav-item dropdown">
                        <button class="nav-link dropdown-toggle btn btn-primary rounded-pill text-white shadow-sm px-3" id="navbarLogin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo e(__('front.sign in')); ?>

                        </button>
                        <div class="dropdown-menu" aria-labelledby="navbarLogin">
                            <a class="dropdown-item" href="<?php echo e(route('soon')); ?>"  >  <?php echo e(__('front.personal')); ?></a>
                            <a class="dropdown-item" href="<?php echo e(route('soon')); ?>" >  <?php echo e(__('front.works')); ?></a>
                        </div>
                    </li>



                </ul>
            </div>
        </div>
    </nav>
    <!-- /header -->



    <?php echo $__env->yieldContent('content'); ?>



    <!-- footer -->
    <footer class="bg-light mt-5">
        <div class=" p-md-5 p-sm-2">
<?php
            $brief2 = App\Models\Brief::where('name','footer')->select(LaravelLocalization::getCurrentLocale().'body'.' as body')->first();
?>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-12 py-md-0 py-3">
                        <a href="<?php echo e(url('/')); ?>" class="navbar-brand  ">
                            <?php if(LaravelLocalization::setLocale() == 'ar'): ?>

                            <img src="<?php echo e(asset('/assets/image/tif-logo.png')); ?> "   alt="logo">

                            <?php else: ?>
                            <img src="<?php echo e(asset('/assets/image/LOGO-TIF-EN 1.png')); ?>" class="ml-md-5 pl-md-5" alt="logo">

                            <?php endif; ?>
                        </a>
                        <?php if($brief2): ?>
                        <p class="mt-4 ml-md-5 pl-md-5"><?php echo $brief2->body; ?> </p>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-4 col-6 pr-md-5 ">
                        <h5 class="text-primary my-4 py-1 px-4">  <?php echo e(__('front.important link')); ?></h5>
                        <ul class="px-5">
                            <li class="mb-3"><a class="text-dark" href="<?php echo e(route('front.aboutus')); ?>">  <?php echo e(__('front.about us')); ?></a></li>
                            <li class="mb-3"><a class="text-dark" href="<?php echo e(route('front.services')); ?>"> <?php echo e(__('front.services')); ?></a></li>
                            <li class="mb-3"><a class="text-dark" href="../content/faq.html">  <?php echo e(__('front.question')); ?></a></li>

                        </ul>
                    </div>
                    <div class="col-md-3 col-6">
                        <h5 class="text-primary my-4 py-1">  <?php echo e(__('front.contact us')); ?></h5>
                        <ul class="px-0 list-unstyled">
                            <li class="mb-3 h6"><p class="mb-4"><i class="fas fa-phone"></i><span class="px-2">0543100348</span></p></li>
                            <li class="mb-3 h6"><p class="mb-4"><i class="fas fa-envelope"></i><span class="px-2">info@tif.sa</span></p></li>
                            <li class="mb-3 h5">
                                <a class="text-dark" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="text-dark px-2" href=""><i class="fab fa-instagram"></i></a>
                                <a class="text-dark" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="text-dark px-2" href=""><i class="fab fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center text-primary mt-4 mb-0"><?php echo e(__('front.copyright')); ?></p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- /footer -->
    <!-- scipt -->

    <script src="<?php echo e(asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/script.js')); ?>"></script>
    <?php echo NoCaptcha::renderJs(); ?>


    <?php echo $__env->yieldPushContent('js'); ?>

    <!-- /script -->
</body>
</html>
<?php /**PATH E:\xampp\htdocs\taef-company\resources\views/front/partials.blade.php ENDPATH**/ ?>