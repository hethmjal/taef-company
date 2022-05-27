
@extends('front.partials')
@section('content')

    <section class="overlay mb-5 bg-primary">
        <img src="../../assets/image/about-us/Mask Group 22.png" class="img-fluid" alt="">
        <div class="overlay-text w-100">
            <h4 class="text-center mb-md-2 mb-0">{{__('front.services')}}</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb  justify-content-center  mb-md-2 mb-0">
                  <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i> {{__('front.home')}} </a></li>
                  <li class="breadcrumb-item"><a href="{{route('front.services')}}">{{__('front.services')}}</a></li>
                  <li class="breadcrumb-item active text-white" aria-current="page">{{$service->title}}   </li>
                </ol>
            </nav>
            
        </div>
    </section>
    <section class="container mb-5 ">
        <!-- <img src="../../assets/image/Mask Group 20.png" class="img-fluid mx-auto d-md-block d-none" alt=""> -->
        <div class=" w-100">
            <h5 class="text-center mb-md-5">{{__('front.part of the world')}} </h5>
            <div class="row mb-5 ">
                <div class="col-12  align-self-center ">
                <div class="row no-gutters">
                    <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text">

                            {{__('front.services page brief')}}
                        </p>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <img src="{{asset('/assets/image/Asset 1.png')}}"class='rounded img-fluid w-100'>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
  
    <section class="container mb-5">
        <h4 class="text-primary mb-3">{{__('front.service description')}} </h4>
        <p>
            {!!$service->des!!}
        </p>
        {{--
        <h4 class="text-primary my-5 text-center">المميزات</h4>
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="card card-features">
                    <div class="card-body">
                    <img src="../../assets/image/Ellipse 220.png"class="mb-3"width='auto'>
                    <h5 class="card-title text-primary">الميزة الأولى</h5>
                    <p class="card-text">
                        بقاء أي شركة واستمرارها يحتم عليها أن تلتزم وتستوفي مسؤوليتها الاجتماعية عند أدائها لوظائفها المختلفة
                    </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-features">
                    <div class="card-body">
                    <img src="../../assets/image/Ellipse 220.png"class="mb-3"width='auto'>
                    <h5 class="card-title text-primary">الميزة الثانية</h5>
                    <p class="card-text">
                        تحرص الشركة على استقطاب المواهب وتدريبها وتطويرها لإتاحة فرص وظيفية أكثر لمن لا يملكون خبرات عملية سابقة
                    </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-features">
                    <div class="card-body">
                    <img src="../../assets/image/Ellipse 220.png"class="mb-3"width='auto'>
                    <h5 class="card-title text-primary">الميزة الثالثة</h5>
                    <p class="card-text">
                        تحرص الشركة على ممارسات العمل الأخلاقية في معاملة موظفيها بطريقة عادلة وأخلاقية وتوفير بيئة عمل آمنة وصحية
                    </p>
                    </div>
                </div>
            </div>
        </div>
        --}}
        <div>
            <div class=" d-flex align-items-center justify-content-center py-4  rounded">
                <img src="../../assets/image/Group 354.png">
            </div>
            <h5 class="text-center">{{__('front.ready to subscribe')}}</h5>
            <p class="text-center">{{__('front.good subscribe')}} </p>
            <div class="d-flex justify-content-center my-3">
                <a href="{{route('front.salescontact',$service->id)}}" class="btn btn-lg btn-primary text-white rounded-pill mx-md-5 mx-0 px-3"> {{__('front.subscribe now')}}</a>
                <a href="{{route('front.contact_us')}}" class="btn btn-lg btn-shadow text-primary rounded-pill px-3"> {{__('front.contact us')}}</a>
            </div>
        </div>
    </section>
 @endsection