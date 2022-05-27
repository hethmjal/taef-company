<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{LaravelLocalization::setLocale()}}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
  <head>


   <meta name="csrf_token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="shortcut icon" href="{{asset('/dist/img/logo1.png')}}" type="image/x-icon">

    <title class="title">{{__("dashboard.web_title")}} </title>
    <link rel="shortcut icon" class="link" href="" type="image/x-icon">

    @if (LaravelLocalization::setLocale() == 'ar')
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Bootstrap 4 RTL -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
    <!-- Custom style for RTL -->
    <link rel="stylesheet" href="{{asset('dist/css/custom.css')}}">
    @else
    <link rel="stylesheet" href="{{asset('plugins_en/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins_en/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins_en/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist_en/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins_en/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins_en/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins_en/summernote/summernote-bs4.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Bootstrap 4 RTL -->
    <link rel="stylesheet" href="https://cdn.ltrcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
    <!-- Custom style for RTL -->
    <link rel="stylesheet" href="{{asset('dist_en/css/custom.css')}}">
    @endif
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('/front/css/intlTelInput.css')}}">

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

    @stack('css')
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
            <a href="{{route('dashboard')}}" class="nav-link">{{__('dashboard.home')}}</a>

          </li>


         </ul>


        <!-- Right navbar links -->
        <ul class="navbar-nav mr-auto-navbav">

          <li class="nav-item logout">
              <form action="{{route('logout')}}" method="post">
                @csrf
              <button type="submit" class="btn btn-sm btn-outline-dark">  {{__("dashboard.logout")}} </button>
            </form>

          @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                  @if (LaravelLocalization::setLocale() != $localeCode)
                      <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                       {{ $properties['native'] }}
                   </a>
                  @endif
          @endforeach
      </li>
        </ul>
      </nav>
      <!-- /.navbar -->
</div>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <i class="fas fa-hand-holding-seedling"></i>
      <img src="{{asset('dist/img/logo1.png')}}" alt="AdminLTE Logo" style="width: 50px" class="brand-image  elevation-3"
           style="opacity: .8">

     <span style="font-size: 40" class="brand-text font-weight-light"> {{__("dashboard.web_title")}} </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


               @can('viewAny', App\Models\Order::class)
               <li class="nav-item has-treeview @if(request()->routeis('orders') || request()->routeis('show-orders') || request()->routeis('new-orders')
                 || request()->routeis('underreview-orders') || request()->routeis('underway-orders') || request()->routeis('complete-orders')
                 || request()->routeis('canceled-orders')|| request()->routeis('unacceptable-orders')
                 ) menu-open @endif">
                <a href="#" class="nav-link @if(request()->routeis('orders') || request()->routeis('show-orders')|| request()->routeis('new-orders')
                 || request()->routeis('underreview-orders') || request()->routeis('underway-orders') || request()->routeis('complete-orders')
                 || request()->routeis('canceled-orders')|| request()->routeis('unacceptable-orders')) active @endif">

                 <i class="nav-icon fas fa-taxi"></i>
                  <p>
                    {{__("dashboard.orders")}}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">


                  @can('viewAny', App\Models\Order::class)
                  <li class="nav-item">
                    <a href="{{route('orders')}}" class="nav-link @if(request()->routeis('orders')) active @endif">
                      <i class="far fa-circle nav-icon"></i>
                      <p>  {{__("dashboard.all orders")}}</p>
                    </a>
                  </li>
                  @endcan


                </ul>
              </li>
               @endcan

               @can('viewAny', App\Models\Slider::class)
               <li class="nav-item has-treeview @if(request()->routeis('sliders') || request()->routeis('slider.add') || request()->routeis('slider.edit')) menu-open @endif">
                <a href="#" class="nav-link @if(request()->routeis('sliders') || request()->routeis('slider.add')) active @endif">

                 <i class="nav-icon fas fa-angle-double-right"></i>
                  <p>
                    {{__("dashboard.sliders")}}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @can('viewAny', App\Models\Slider::class)
                  <li class="nav-item">
                    <a href="{{route('sliders')}}" class="nav-link @if(request()->routeis('sliders')) active @endif ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{__("dashboard.show_sliders")}} </p>
                    </a>
                  </li>
                  @endcan

                  @can('create', App\Models\Slider::class)
                  <li class="nav-item">
                    <a href="{{route('slider.add')}}" class="nav-link @if(request()->routeis('slider.add')) active @endif">
                      <i class="far fa-circle nav-icon"></i>
                      <p>  {{__("dashboard.add")}}</p>
                    </a>
                  </li>
                  @endcan
                </ul>
              </li>
               @endcan



                  @can('viewAny', App\Models\Aboutus::class)
                  <li class="nav-item has-treeview @if(request()->routeis('settings') || request()->routeis('aboutus')) menu-open @endif">
                   <a href="#" class="nav-link @if(request()->routeis('aboutus') || request()->routeis('settings')) active @endif">

                    <i class="nav-icon   fas fa-book		"></i>
                     <p>
                       {{__("dashboard.website content")}}
                       <i class="right fas fa-angle-left"></i>
                     </p>
                   </a>
                   <ul class="nav nav-treeview">
                     @can('viewAny', App\Models\Aboutus::class)
                     <li class="nav-item">
                       <a href="{{route('settings')}}" class="nav-link @if(request()->routeis('settings')) active @endif ">
                         <i class="far fa-circle nav-icon"></i>
                         <p>{{__("dashboard.home page content")}} </p>
                       </a>
                     </li>
                     @endcan

                     @can('create', App\Models\Aboutus::class)
                     <li class="nav-item">
                       <a href="{{route('aboutus')}}" class="nav-link @if(request()->routeis('aboutus')) active @endif">
                         <i class="far fa-circle nav-icon"></i>
                         <p>  {{__("dashboard.aboutus page content")}}</p>
                       </a>
                     </li>
                     @endcan

                </ul>
              </li>
               @endcan



           @can('viewAny', App\Models\Services::class)
           <li class="nav-item has-treeview @if(request()->routeis('services') || request()->routeis('service.add') || request()->routeis('service.edit')) menu-open @endif">
            <a href="#" class="nav-link @if(request()->routeis('services') || request()->routeis('service.add')) active @endif">

             <i class="nav-icon fas fa-server"></i>
              <p>
                {{__("dashboard.services")}}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('viewAny', App\Models\Services::class)
              <li class="nav-item">
                <a href="{{route('services')}}" class="nav-link @if(request()->routeis('services')) active @endif ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{__("dashboard.show_services")}} </p>
                </a>
              </li>
              @endcan

              @can('create', App\Models\Services::class)
              <li class="nav-item">
                <a href="{{route('service.add')}}" class="nav-link @if(request()->routeis('service.add')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  {{__("dashboard.add")}}</p>
                </a>
              </li>
              @endcan

            </ul>
          </li>
           @endcan







          @can('viewAny', App\Models\Partners::class)
          <li class="nav-item has-treeview @if(request()->routeis('parteners') || request()->routeis('parteners.add')|| request()->routeis('parteners.edit')) menu-open @endif">
            <a href="#" class="nav-link @if(request()->routeis('parteners') || request()->routeis('parteners.add')) active @endif">

             <i class="nav-icon fas fa-handshake"></i>
              <p>
                {{__("dashboard.partners")}}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('viewAny', App\Models\Partners::class)
              <li class="nav-item">
                <a href="{{route('parteners')}}" class="nav-link @if(request()->routeis('parteners')) active @endif ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{__("dashboard.show_partners")}} </p>
                </a>
              </li>
              @endcan

              @can('create', App\Models\Partners::class)
              <li class="nav-item">
                <a href="{{route('parteners.add')}}" class="nav-link @if(request()->routeis('parteners.add')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  {{__("dashboard.add")}}</p>
                </a>
              </li>
              @endcan

            </ul>
          </li>

          @endcan


          @can('viewAny', App\Models\News::class)
          <li class="nav-item has-treeview  @if(request()->routeis('news') || request()->routeis('news.add')|| request()->routeis('news.edit')) menu-open @endif">
            <a href="" class="nav-link @if(request()->routeis('news') || request()->routeis('news.add')) active @endif ">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                {{__("dashboard.news")}}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('viewAny', App\Models\News::class)
              <li class="nav-item">
                <a href="{{route('news')}}" class="nav-link @if(request()->routeis('news')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{__("dashboard.show_news")}} </p>
                </a>
              </li>
              @endcan
              @can('create', App\Models\News::class)
              <li class="nav-item">
                <a href="{{route('news.add')}}" class="nav-link @if(request()->routeis('news.add')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{__("dashboard.add")}}</p>
                </a>
              </li>
              @endcan

            </ul>
          </li>
          @endcan

          @if ( Auth::user()->can('viewAny',  App\Models\User::class) || Auth::user()->can('viewAny',  App\Models\Group::class) )

          <li class="nav-item has-treeview  @if(request()->routeis('users') ||request()->routeis('groups')||request()->routeis('group.create')||request()->routeis('group.edit')|| request()->routeis('register')|| request()->routeis('user.roles')|| request()->routeis('user.edit')) menu-open @endif">
            <a href="" class="nav-link @if(request()->routeis('register')||request()->routeis('groups')||request()->routeis('group.create')||request()->routeis('group.edit')|| request()->routeis('users')) active @endif ">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                {{__("dashboard.users")}}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('viewAny', App\Models\User::class)
              <li class="nav-item">
                <a href="{{route('users')}}" class="nav-link @if(request()->routeis('users')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{__("dashboard.show_users")}} </p>
                </a>
              </li>
              @endcan


              @can('create', App\Models\User::class)
              <li class="nav-item">
                <a href="{{route('register')}}" class="nav-link @if(request()->routeis('register')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{__("dashboard.add")}}</p>
                </a>
              </li>
              @endcan
                @can('viewAny', App\Models\Group::class)
                <li class="nav-item">
                  <a href="{{route('groups')}}" class="nav-link @if(request()->routeis('groups')) active @endif">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{__("dashboard.show_groups")}} </p>
                  </a>
                </li>
                @endcan


                @can('create', App\Models\Group::class)
                <li class="nav-item">
                  <a href="{{route('group.create')}}" class="nav-link @if(request()->routeis('group.create')) active @endif">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{__("dashboard.add group")}}</p>
                  </a>
                </li>
                @endcan

            </ul>
          </li>
             @endif








           @if ( Auth::user()->can('viewAny',  App\Models\Marketing::class) || Auth::user()->can('viewAny',  App\Models\MailingList::class) )
          <li class="nav-item has-treeview  @if(request()->routeis('marketing') || request()->routeis('app.add')) menu-open @endif">
            <a href="" class="nav-link @if( request()->routeis('marketing') || request()->routeis('app.add')) active @endif ">
              <i class="nav-icon fas  fa-users
              "></i>
              <p>
                {{__("dashboard.marketing")}}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('viewAny', App\Models\Marketing::class)

              <li class="nav-item">
                <a href="{{route('marketing')}}" class="nav-link @if(request()->routeis('marketing')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{__("dashboard.app" )}} </p>
                </a>
              </li>
              @endcan


              @can('viewAny', App\Models\MailingList::class)

              <li class="nav-item ">

                <a href="{{route('mailinglist')}}" class="nav-link @if(request()->routeis('mailinglist')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{__("dashboard.mailinglist" )}} </p>
                </a>
              </li>
              @endcan

            </ul>
          </li>
          @endcan





             @can('viewAny', App\Models\Message::class)

          <li class="nav-item ">
            <li class="nav-icon fas fa-message">
            </li>
            <a href="{{route('dashboard.messages')}}" class="nav-link @if(request()->routeis('dashboard.messages')||request()->routeis('dashboard.show-messages')) active @endif">
              <i class="far fa-clipboard		"></i>
              <p> {{__("dashboard.message" )}} </p>
            </a>
          </li>
         @endcan


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->


       @yield('content')



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
@if (LaravelLocalization::setLocale() == 'ar')
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
@else
<script src="{{asset('plugins_en/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins_en/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist_en/js/adminlte.min.js')}}"></script>
@endif


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

    var channel = pusher.subscribe('private-App.Models.User.{{Auth::id()}}');
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

      const audio = new Audio("{{asset('not.mp3')}}");
       audio.play();
    });


  </script>

  @stack('js')
</body>
</html>
