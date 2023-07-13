<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="<?php echo e(LaravelLocalization::setLocale()); ?>" dir="<?php echo e(LaravelLocalization::getCurrentLocaleDirection()); ?>">
  <head>


   <meta name="csrf_token" content="<?php echo e(csrf_token()); ?>">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="shortcut icon" href="<?php echo e(asset('/dist/img/logo1.png')); ?>" type="image/x-icon">

    <title class="title"><?php echo e(__("dashboard.web_title")); ?> </title>
    <link rel="shortcut icon" class="link" href="" type="image/x-icon">

    <?php if(LaravelLocalization::setLocale() == 'ar'): ?>
    <link rel="stylesheet" href="<?php echo e(asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/jqvmap/jqvmap.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/daterangepicker/daterangepicker.css')); ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/summernote/summernote-bs4.css')); ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Bootstrap 4 RTL -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
    <!-- Custom style for RTL -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/custom.css')); ?>">
    <?php else: ?>
    <link rel="stylesheet" href="<?php echo e(asset('plugins_en/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins_en/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins_en/jqvmap/jqvmap.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('dist_en/css/adminlte.min.css')); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins_en/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins_en/daterangepicker/daterangepicker.css')); ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins_en/summernote/summernote-bs4.css')); ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Bootstrap 4 RTL -->
    <link rel="stylesheet" href="https://cdn.ltrcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
    <!-- Custom style for RTL -->
    <link rel="stylesheet" href="<?php echo e(asset('dist_en/css/custom.css')); ?>">
    <?php endif; ?>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('/front/css/intlTelInput.css')); ?>">

    <style>
      .iti{
          width: 100%;
      }

      .iti__flag {background-image: url("/front/img/flags.png");}

  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .iti__flag {background-image: url("/font/img/flags@2x.png");}
  }
  </style>

    <!-- Tempusdominus Bbootstrap 4 -->

    <?php echo $__env->yieldPushContent('css'); ?>
  </head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo e(route('dashboard')); ?>" class="nav-link"><?php echo e(__('dashboard.home')); ?></a>

          </li>


         </ul>


        <!-- Right navbar links -->
        <ul class="navbar-nav mr-auto-navbav">

          <li class="nav-item logout">
              <form action="<?php echo e(route('logout')); ?>" method="post">
                <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-sm btn-outline-dark">  <?php echo e(__("dashboard.logout")); ?> </button>
            </form>

          <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <?php if(LaravelLocalization::setLocale() != $localeCode): ?>
                      <a rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                       <?php echo e($properties['native']); ?>

                   </a>
                  <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </li>
        </ul>
      </nav>
      <!-- /.navbar -->
</div>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="<?php echo e(route('dashboard')); ?>" class="brand-link">
      <i class="fas fa-hand-holding-seedling"></i>
      <img src="<?php echo e(asset('dist/img/logo1.png')); ?>" alt="AdminLTE Logo" style="width: 50px" class="brand-image  elevation-3"
           style="opacity: .8">

     <span style="font-size: 40" class="brand-text font-weight-light"> <?php echo e(__("dashboard.web_title")); ?> </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\Order::class)): ?>
               <li class="nav-item has-treeview <?php if(request()->routeis('orders') || request()->routeis('show-orders') || request()->routeis('new-orders')
                 || request()->routeis('underreview-orders') || request()->routeis('underway-orders') || request()->routeis('complete-orders')
                 || request()->routeis('canceled-orders')|| request()->routeis('unacceptable-orders')
                 ): ?> menu-open <?php endif; ?>">
                <a href="#" class="nav-link <?php if(request()->routeis('orders') || request()->routeis('show-orders')|| request()->routeis('new-orders')
                 || request()->routeis('underreview-orders') || request()->routeis('underway-orders') || request()->routeis('complete-orders')
                 || request()->routeis('canceled-orders')|| request()->routeis('unacceptable-orders')): ?> active <?php endif; ?>">

                 <i class="nav-icon fas fa-taxi"></i>
                  <p>
                    <?php echo e(__("dashboard.orders")); ?>

                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">


                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\Order::class)): ?>
                  <li class="nav-item">
                    <a href="<?php echo e(route('orders')); ?>" class="nav-link <?php if(request()->routeis('orders')): ?> active <?php endif; ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>  <?php echo e(__("dashboard.all orders")); ?></p>
                    </a>
                  </li>
                  <?php endif; ?>


                </ul>
              </li>
               <?php endif; ?>

               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\Slider::class)): ?>
               <li class="nav-item has-treeview <?php if(request()->routeis('sliders') || request()->routeis('slider.add') || request()->routeis('slider.edit')): ?> menu-open <?php endif; ?>">
                <a href="#" class="nav-link <?php if(request()->routeis('sliders') || request()->routeis('slider.add')): ?> active <?php endif; ?>">

                 <i class="nav-icon fas fa-angle-double-right"></i>
                  <p>
                    <?php echo e(__("dashboard.sliders")); ?>

                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\Slider::class)): ?>
                  <li class="nav-item">
                    <a href="<?php echo e(route('sliders')); ?>" class="nav-link <?php if(request()->routeis('sliders')): ?> active <?php endif; ?> ">
                      <i class="far fa-circle nav-icon"></i>
                      <p><?php echo e(__("dashboard.show_sliders")); ?> </p>
                    </a>
                  </li>
                  <?php endif; ?>

                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\Slider::class)): ?>
                  <li class="nav-item">
                    <a href="<?php echo e(route('slider.add')); ?>" class="nav-link <?php if(request()->routeis('slider.add')): ?> active <?php endif; ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>  <?php echo e(__("dashboard.add")); ?></p>
                    </a>
                  </li>
                  <?php endif; ?>
                </ul>
              </li>
               <?php endif; ?>



                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\Aboutus::class)): ?>
                  <li class="nav-item has-treeview <?php if(request()->routeis('settings') || request()->routeis('aboutus')): ?> menu-open <?php endif; ?>">
                   <a href="#" class="nav-link <?php if(request()->routeis('aboutus') || request()->routeis('settings')): ?> active <?php endif; ?>">

                    <i class="nav-icon   fas fa-book		"></i>
                     <p>
                       <?php echo e(__("dashboard.website content")); ?>

                       <i class="right fas fa-angle-left"></i>
                     </p>
                   </a>
                   <ul class="nav nav-treeview">
                     <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\Aboutus::class)): ?>
                     <li class="nav-item">
                       <a href="<?php echo e(route('settings')); ?>" class="nav-link <?php if(request()->routeis('settings')): ?> active <?php endif; ?> ">
                         <i class="far fa-circle nav-icon"></i>
                         <p><?php echo e(__("dashboard.home page content")); ?> </p>
                       </a>
                     </li>
                     <?php endif; ?>

                     <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\Aboutus::class)): ?>
                     <li class="nav-item">
                       <a href="<?php echo e(route('aboutus')); ?>" class="nav-link <?php if(request()->routeis('aboutus')): ?> active <?php endif; ?>">
                         <i class="far fa-circle nav-icon"></i>
                         <p>  <?php echo e(__("dashboard.aboutus page content")); ?></p>
                       </a>
                     </li>
                     <?php endif; ?>

                </ul>
              </li>
               <?php endif; ?>



           <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\Services::class)): ?>
           <li class="nav-item has-treeview <?php if(request()->routeis('services') || request()->routeis('service.add') || request()->routeis('service.edit')): ?> menu-open <?php endif; ?>">
            <a href="#" class="nav-link <?php if(request()->routeis('services') || request()->routeis('service.add')): ?> active <?php endif; ?>">

             <i class="nav-icon fas fa-server"></i>
              <p>
                <?php echo e(__("dashboard.services")); ?>

                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\Services::class)): ?>
              <li class="nav-item">
                <a href="<?php echo e(route('services')); ?>" class="nav-link <?php if(request()->routeis('services')): ?> active <?php endif; ?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo e(__("dashboard.show_services")); ?> </p>
                </a>
              </li>
              <?php endif; ?>

              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\Services::class)): ?>
              <li class="nav-item">
                <a href="<?php echo e(route('service.add')); ?>" class="nav-link <?php if(request()->routeis('service.add')): ?> active <?php endif; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  <?php echo e(__("dashboard.add")); ?></p>
                </a>
              </li>
              <?php endif; ?>

            </ul>
          </li>
           <?php endif; ?>







          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\Partners::class)): ?>
          <li class="nav-item has-treeview <?php if(request()->routeis('parteners') || request()->routeis('parteners.add')|| request()->routeis('parteners.edit')): ?> menu-open <?php endif; ?>">
            <a href="#" class="nav-link <?php if(request()->routeis('parteners') || request()->routeis('parteners.add')): ?> active <?php endif; ?>">

             <i class="nav-icon fas fa-handshake"></i>
              <p>
                <?php echo e(__("dashboard.partners")); ?>

                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\Partners::class)): ?>
              <li class="nav-item">
                <a href="<?php echo e(route('parteners')); ?>" class="nav-link <?php if(request()->routeis('parteners')): ?> active <?php endif; ?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo e(__("dashboard.show_partners")); ?> </p>
                </a>
              </li>
              <?php endif; ?>

              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\Partners::class)): ?>
              <li class="nav-item">
                <a href="<?php echo e(route('parteners.add')); ?>" class="nav-link <?php if(request()->routeis('parteners.add')): ?> active <?php endif; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  <?php echo e(__("dashboard.add")); ?></p>
                </a>
              </li>
              <?php endif; ?>

            </ul>
          </li>

          <?php endif; ?>


          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\News::class)): ?>
          <li class="nav-item has-treeview  <?php if(request()->routeis('news') || request()->routeis('news.add')|| request()->routeis('news.edit')): ?> menu-open <?php endif; ?>">
            <a href="" class="nav-link <?php if(request()->routeis('news') || request()->routeis('news.add')): ?> active <?php endif; ?> ">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                <?php echo e(__("dashboard.news")); ?>

                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\News::class)): ?>
              <li class="nav-item">
                <a href="<?php echo e(route('news')); ?>" class="nav-link <?php if(request()->routeis('news')): ?> active <?php endif; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo e(__("dashboard.show_news")); ?> </p>
                </a>
              </li>
              <?php endif; ?>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\News::class)): ?>
              <li class="nav-item">
                <a href="<?php echo e(route('news.add')); ?>" class="nav-link <?php if(request()->routeis('news.add')): ?> active <?php endif; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo e(__("dashboard.add")); ?></p>
                </a>
              </li>
              <?php endif; ?>

            </ul>
          </li>
          <?php endif; ?>

          <?php if( Auth::user()->can('viewAny',  App\Models\User::class) || Auth::user()->can('viewAny',  App\Models\Group::class) ): ?>

          <li class="nav-item has-treeview  <?php if(request()->routeis('users') ||request()->routeis('groups')||request()->routeis('group.create')||request()->routeis('group.edit')|| request()->routeis('register')|| request()->routeis('user.roles')|| request()->routeis('user.edit')): ?> menu-open <?php endif; ?>">
            <a href="" class="nav-link <?php if(request()->routeis('register')||request()->routeis('groups')||request()->routeis('group.create')||request()->routeis('group.edit')|| request()->routeis('users')): ?> active <?php endif; ?> ">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                <?php echo e(__("dashboard.users")); ?>

                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\User::class)): ?>
              <li class="nav-item">
                <a href="<?php echo e(route('users')); ?>" class="nav-link <?php if(request()->routeis('users')): ?> active <?php endif; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo e(__("dashboard.show_users")); ?> </p>
                </a>
              </li>
              <?php endif; ?>


              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\User::class)): ?>
              <li class="nav-item">
                <a href="<?php echo e(route('register')); ?>" class="nav-link <?php if(request()->routeis('register')): ?> active <?php endif; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo e(__("dashboard.add")); ?></p>
                </a>
              </li>
              <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\Group::class)): ?>
                <li class="nav-item">
                  <a href="<?php echo e(route('groups')); ?>" class="nav-link <?php if(request()->routeis('groups')): ?> active <?php endif; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?php echo e(__("dashboard.show_groups")); ?> </p>
                  </a>
                </li>
                <?php endif; ?>


                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\Group::class)): ?>
                <li class="nav-item">
                  <a href="<?php echo e(route('group.create')); ?>" class="nav-link <?php if(request()->routeis('group.create')): ?> active <?php endif; ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?php echo e(__("dashboard.add group")); ?></p>
                  </a>
                </li>
                <?php endif; ?>

            </ul>
          </li>
             <?php endif; ?>








           <?php if( Auth::user()->can('viewAny',  App\Models\Marketing::class) || Auth::user()->can('viewAny',  App\Models\MailingList::class) ): ?>
          <li class="nav-item has-treeview  <?php if(request()->routeis('marketing') || request()->routeis('app.add')): ?> menu-open <?php endif; ?>">
            <a href="" class="nav-link <?php if( request()->routeis('marketing') || request()->routeis('app.add')): ?> active <?php endif; ?> ">
              <i class="nav-icon fas  fa-users
              "></i>
              <p>
                <?php echo e(__("dashboard.marketing")); ?>

                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\Marketing::class)): ?>

              <li class="nav-item">
                <a href="<?php echo e(route('marketing')); ?>" class="nav-link <?php if(request()->routeis('marketing')): ?> active <?php endif; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p> <?php echo e(__("dashboard.app" )); ?> </p>
                </a>
              </li>
              <?php endif; ?>


              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\MailingList::class)): ?>

              <li class="nav-item ">

                <a href="<?php echo e(route('mailinglist')); ?>" class="nav-link <?php if(request()->routeis('mailinglist')): ?> active <?php endif; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p> <?php echo e(__("dashboard.mailinglist" )); ?> </p>
                </a>
              </li>
              <?php endif; ?>

            </ul>
          </li>
          <?php endif; ?>





             <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\Message::class)): ?>

          <li class="nav-item ">
            <li class="nav-icon fas fa-message">
            </li>
            <a href="<?php echo e(route('dashboard.messages')); ?>" class="nav-link <?php if(request()->routeis('dashboard.messages')||request()->routeis('dashboard.show-messages')): ?> active <?php endif; ?>">
              <i class="far fa-clipboard		"></i>
              <p> <?php echo e(__("dashboard.message" )); ?> </p>
            </a>
          </li>
         <?php endif; ?>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->


       <?php echo $__env->yieldContent('content'); ?>



    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">


    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<?php if(LaravelLocalization::setLocale() == 'ar'): ?>
<script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('dist/js/adminlte.min.js')); ?>"></script>
<?php else: ?>
<script src="<?php echo e(asset('plugins_en/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('plugins_en/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('dist_en/js/adminlte.min.js')); ?>"></script>
<?php endif; ?>


<script>
  $(document).ready(function(){

  });
  </script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>
    var i = 0;
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('df27f43402a4858b2483', {
      cluster: 'ap2',
      authEndpoint: "/broadcasting/auth"
    });

    var channel = pusher.subscribe('private-App.Models.User.<?php echo e(Auth::id()); ?>');
    channel.bind('Illuminate\\Notifications\\Events\\BroadcastNotificationCreated', function(data) {
    //  alert(data.title);

      $('.badge').removeClass('d-none');
     //var count = $('.badge').text();
     // $('.badge').html(1 + Number(count) );
      $('.badge').html(function() {
             return (1 + Number($('.badge').text()));
           });

      $('.title').prepend('هناك طلب!!');



      $('.notify').prepend("<a href='" +data.action+ "'class='dropdown-item notification'>" + data.title + "<p>"+ data.body +"</p>" +"<span class='text-secondary'>"+data.created_at+"</span>" + "</a> <hr>" )
      $('.toast').toast('show');
      $('.toast-body').append( "<p>"+ data.body +"</p>");

      const audio = new Audio("<?php echo e(asset('not.mp3')); ?>");
       audio.play();
    });


  </script>

  <?php echo $__env->yieldPushContent('js'); ?>
</body>
</html>
<?php /**PATH E:\xampp\htdocs\taef-company\resources\views/admin/layout/partials.blade.php ENDPATH**/ ?>