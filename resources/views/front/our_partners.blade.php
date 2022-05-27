
@extends('front.partials')
@section('content')
    <!-- content -->
    <nav aria-label="breadcrumb">
        <h5 class="text-primary text-center  mt-5">{{__('front.partner')}}</h5>
        <ol class="breadcrumb bg-transparent  justify-content-center">
          <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i> {{__('front.home')}} </a></li>
          <li class="breadcrumb-item"><a href="{{route('front.partners')}}">{{__('front.partner')}}</a></li>
        </ol>
    </nav>

    <section class="container mb-5">
        <div class="row mb-5">
            <div class="col-12 ">
            <div class="row no-gutters">
                <div class="col-md-6 order-md-1 order-12">
                <div class="card-body">
                    <h3 class="card-title text-primary mb-5"> {{__('front.partners success')}} </h3>
                    <p class="card-text">
                        {{__('front.partners success2')}}
                    </p>
                </div>
                </div>
                <div class="col-md-6 order-md-12 order-1">
                <img src="{{asset('/assets/image/about-us/image (57).png')}}"class='rounded img-fluid'>
                </div>
            </div>
            </div>
        </div>
        <div class="row mb-5">

           @foreach ($partners as $partner)

            <div class="col-md-3 col-6 mb-5">
                <a href="{{route('front.partners-show',$partner->id)}}">
                    <div class="card in-shadow p-4 h-100">
                    <img src="{{asset('uploads/'.$partner->logo)}}" style='max-height: 120px;' class="card-img-top my-auto">
                 </div>
                </a>
            </div>

            @endforeach
            <div class="container text-center">
                {{ $partners->links() }}
        
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-12">
                <h4 class="text-primary mb-3"> {{__('front.ambition')}} </h4>
                <p>
                    {{__('front.ambition2')}}
                </p>
            </div>
            <div class="col-md-3 col-12 my-auto">
                <a href="{{route('front.contact_us')}}" class="btn btn-lg btn-primary rounded-pill text-white px-3 ">{{__('front.contact us')}}  </a>
            </div>
        </div>
    </section>

   
    @endsection