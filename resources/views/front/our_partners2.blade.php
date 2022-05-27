
@extends('front.partials')
@section('content')
    <!-- content -->
    <nav aria-label="breadcrumb">
        <h5 class="text-primary text-center  mt-5">{{__('front.partner')}}</h5>
        <ol class="breadcrumb bg-transparent  justify-content-center">
          <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i> {{__('front.home')}} </a></li>
          <li class="breadcrumb-item"><a href="{{route('front.partners')}}">{{__('front.partner')}}</a></li>
          <li class="breadcrumb-item"><a href="{{$partner->link}}">{{$partner->name}}</a></li>
        </ol>
    </nav>

    <section class="container mb-5">
        <div class="row mb-5">
            <div class="col-12 ">
            <div class="row no-gutters">
                <div class="col-md-8 order-md-1 order-12">
                <div class="card-body">
                    <h3 class="card-title text-primary mb-5">{{$partner->name}}</h3>
                    <p class="card-text">
                        {!!$partner->des!!}
                    </p>
                    <a href="{{$partner->link}}" target="blank"  class="btn btn-lg btn-shadow text-primary rounded-pill px-3"> {{__('front.link')}}  </a>
                </div>
                </div>
                <div class="col-md-4 text-center order-md-12 order-1">
                <img src="{{asset('uploads/'.$partner->logo)}}"class='rounded img-fluid'>
                </div>
            </div>
            </div>
        </div>
        <div class="row mb-5">
            @if ($partner->images->count()>0)
            <div class="col-md-5 col-12">
                <img src="{{asset('uploads/'.$partner->images[0]->path)}}"  width="400px" height="300px">
            </div>  
            @endif
             

               
            <div class="col-md-7">
                <div class="row">
                    @foreach ($partner->images as $image)
                    @if ($loop->index !=0)
                        
                    <div class="col-md-6 mb-1"><img src="{{asset('uploads/'.$image->path)}}"  width="200px" height="200px"></div>
                    @endif

                    @endforeach

                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-md-9 col-12">
                <h4 class="text-primary mb-3">{{__('front.ambition')}}</h4>
                <p>{{__('front.ambition2')}}</p>
            </div>
            <div class="col-md-3 col-12 my-auto">
                <a href="{{route('front.contact_us')}}" class="btn btn-lg btn-primary rounded-pill text-white px-3 ">{{__('front.contact us')}}</a>
            </div>
        </div>
    </section>

@endsection