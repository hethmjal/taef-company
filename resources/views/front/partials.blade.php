<!DOCTYPE html>
<html lang="{{LaravelLocalization::setLocale()}}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{asset('/dist/img/logo1.png')}}" type="image/x-icon">
    @php
    $items = App\Models\Marketing::get();

@endphp
    @foreach ($items as $item)
        {!!$item->code!!}
    @endforeach
    <title> {{__('dashboard.web_title')}}</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    @if (LaravelLocalization::setLocale() == 'ar')
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/custom.css')}}">


    @else
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/custom_en.css')}}">

    @endif
    <link rel="stylesheet" href="{{asset('/front/css/intlTelInput.css')}}">

    <link rel="stylesheet" href="{{asset('/assets/css/font-awesome.min.css')}}">
    {!! ReCaptcha::htmlScriptTagJsApi() !!}


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
            <a href="{{url('/')}}" class="navbar-brand  ">
                @if (LaravelLocalization::setLocale() == 'ar')

                <img src="{{asset('/assets/image/tif-logo.png')}} " width="150px"  alt="logo">

                @else
                <img src="{{asset('/assets/image/LOGO-TIF-EN 1.png')}}" style="margin-right: 5rem" width="150px" alt="logo">

                @endif
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">


                    <li class="nav-item active">
                        <a href="{{route('home')}}" class="nav-link @if(request()->routeis('home')) active text-primary @endif ">{{__('front.home')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('front.aboutus')}}" class="nav-link @if(request()->routeis('front.aboutus')) active text-primary @endif ">{{__('front.about us')}} </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('front.services')}}" class="nav-link @if(request()->routeis('front.services')) active text-primary @endif ">{{__('front.services')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('front.partners')}}" class="nav-link  @if(request()->routeis('front.partners')) active text-primary @endif ">{{__('front.partner')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('blog')}}" class="nav-link  @if(request()->routeis('blog')) active text-primary @endif">{{__('front.blog')}}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarHR" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{__('front.hr')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarHR">
                            <a class="dropdown-item" href="{{route('soon')}}"  > {{__('front.recruitment')}}</a>
                            <a class="dropdown-item" href="{{route('soon')}}" >{{__('front.job training')}}</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('front.contact_us')}}" class="nav-link @if(request()->routeis('front.contact_us')) active text-primary @endif ">  {{__('front.contact us')}}</a>
                    </li>
                    <li class="nav-item bg-primary mx-2">

                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                @if (LaravelLocalization::setLocale() != $localeCode)
                                    <a class="nav-link  text-white" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                     {{ $localeCode }}
                                 </a>
                                @endif

                        @endforeach
                   </li>
                    <li class="nav-item dropdown">
                        <button class="nav-link dropdown-toggle btn btn-primary rounded-pill text-white shadow-sm px-3" id="navbarLogin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{__('front.sign in')}}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="navbarLogin">
                            <a class="dropdown-item" href="{{route('soon')}}"  >  {{__('front.personal')}}</a>
                            <a class="dropdown-item" href="{{route('soon')}}" >  {{__('front.works')}}</a>
                        </div>
                    </li>



                </ul>
            </div>
        </div>
    </nav>
    <!-- /header -->



    @yield('content')



    <!-- footer -->
    <footer class="bg-light mt-5">
        <div class=" p-md-5 p-sm-2">
@php
            $brief2 = App\Models\Brief::where('name','footer')->select(LaravelLocalization::getCurrentLocale().'body'.' as body')->first();
@endphp
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-12 py-md-0 py-3">
                        <a href="{{url('/')}}" class="navbar-brand  ">
                            @if (LaravelLocalization::setLocale() == 'ar')

                            <img src="{{asset('/assets/image/tif-logo.png')}} "   alt="logo">

                            @else
                            <img src="{{asset('/assets/image/LOGO-TIF-EN 1.png')}}" class="ml-md-5 pl-md-5" alt="logo">

                            @endif
                        </a>
                        @if ($brief2)
                        <p class="mt-4 ml-md-5 pl-md-5">{!!$brief2->body!!} </p>
                        @endif
                    </div>
                    <div class="col-md-4 col-6 pr-md-5 ">
                        <h5 class="text-primary my-4 py-1 px-4">  {{__('front.important link')}}</h5>
                        <ul class="px-5">
                            <li class="mb-3"><a class="text-dark" href="{{route('front.aboutus')}}">  {{__('front.about us')}}</a></li>
                            <li class="mb-3"><a class="text-dark" href="{{route('front.services')}}"> {{__('front.services')}}</a></li>
                            <li class="mb-3"><a class="text-dark" href="../content/faq.html">  {{__('front.question')}}</a></li>

                        </ul>
                    </div>
                    <div class="col-md-3 col-6">
                        <h5 class="text-primary my-4 py-1">  {{__('front.contact us')}}</h5>
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
                        <p class="text-center text-primary mt-4 mb-0">{{__('front.copyright')}}</p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- /footer -->
    <!-- scipt -->

    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/assets/js/script.js')}}"></script>
    {!! NoCaptcha::renderJs() !!}

    @stack('js')

    <!-- /script -->
</body>
</html>
