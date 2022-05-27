   
@extends('front.partials')
@section('content')
<nav aria-label="breadcrumb">
    <h5 class="text-primary text-center  mt-5">{{__('front.services')}}</h5>
    <ol class="breadcrumb bg-transparent  justify-content-center">
      <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i> {{__('front.home')}} </a></li>
      <li class="breadcrumb-item"><a href="{{route('front.services')}}">{{__('front.services')}}ا</a></li>
    </ol>
</nav>
    <section class="container mb-5">
         
        <h5 class="text-center text-primary mb-4"> {{__('front.features of services')}}</h5>
        <div class="row mb-5">
            <div class="col-md-4 col-sm-6 col-12">
                <div class="card bg-transparent h-100 text-center shadow-none">
                    <div class=" d-flex align-items-center justify-content-center pt-4  rounded">
                        <img src="{{asset('/assets/image/surface1.png')}}">
                    </div>
                    <div class="card-body">
                    <p class="card-text text-center">  {{__('front.quality')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="card bg-transparent h-100 text-center shadow-none">
                    <div class=" d-flex align-items-center justify-content-center pt-4  rounded">
                        <img src="{{asset('/assets/image/Icon material-access-time.png')}}">
                    </div>
                    <div class="card-body">
                    <p class="card-text text-center">   {{__('front.speed')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="card bg-transparent h-100 text-center shadow-none">
                    <div class=" d-flex align-items-center justify-content-center pt-4  rounded">
                        <img src="{{asset('/assets/image/usability.png')}}">
                    </div>
                    <div class="card-body">
                    <p class="card-text text-center"> {{__('front.easy')}} </p>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="text-center mb-3">{{__('front.services')}} </h5>
        <h5 class="text-center text-primary mb-4">{{__('front.part of the world')}}</h5>
        <div class="row mb-5 m-auto">
          
           
          @foreach ($services as $service)
              
            <div class="col-md-4 col-sm-6 col-12 mb-4">
                <div class="card bg-transparent h-100 text-center shadow-none">
                    <div class=" d-flex align-items-center justify-content-center pt-4  rounded">
                        <img width="150px" height="150px" src="{{asset('uploads/'.$service->image)}}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$service->title}} </h5>
                        <p class="card-text text-center">
                            {!!Str::words($service->des,30)!!}     

                        </p>

                    </div>
                    <div class="d-flex justify-content-between mx-md-5 mx-4">
                        <a href="{{route('front.salescontact',$service->id)}}" class="btn btn-shadow text-primary rounded-pill"> {{__('front.subscribe now')}} </a>
                        <a href="{{route('front.services-show',$service->id)}}" class="btn text-black shadow-none"> {{__('front.more info')}}</a>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $services->links() }}

        </div>

    </section>
    
@endsection