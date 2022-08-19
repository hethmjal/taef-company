
@extends('front.partials')
@section('content')


@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif

    @php
        $lang =LaravelLocalization::setLocale();
    @endphp
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">

          @if ($slid)
          <li data-target="#carouselExampleIndicators" data-slide-to="{{$slid->id}}" class="active"></li>
          @endif

          @if ($sliders)
            @foreach ($sliders as $slider)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$slider->id}}" class="active"></li>
            @endforeach
            @endif




        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active ">
                @if ($slid)

                <a href="{{$slid->link}}">
                  <img src="{{asset('uploads/'.$slid->image)}}" class="d-block  w-100" width="1108px" height="428" alt="...">
                </a>
                @endif

              </div>
              @if ($sliders)

            @foreach ($sliders as $slider)

          <div class="carousel-item  ">
            <a href="{{$slider->link}}" target="blank">

            <img src="{{asset('uploads/'.$slider->image)}}"  class="d-block  w-100" width="1108px" height="428" alt="...">
            </a>
          </div>
          @endforeach
          @endif

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /slider -->

    <div class="container">
        <div class="my-5 mx-5">
            <h5 class="text-primary text-center">{{__('dashboard.web_title')}} </h5>
            @if ($brief1)
            <p class="text-center">  {!!$brief1->body!!}  </p>
                     @endif

        </div>

    </div>
    <div class="bg-light mb-5">
        <div class="container">

            <div class="row py-3">

                @foreach ($images as $image)

                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card bg-transparent text-center shadow-none">
                        <div class=" d-flex align-items-center justify-content-center pt-4  rounded">
                            <div class=" bg-white rounded-circle p-3 shadow"> <span  class=""><img src="{{asset('uploads/'.$image->image)}}" width='63px'></span> </div>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title text-primary text-center">{{$image->title}}</h5>
                        <p class="card-text text-center">  {{$image->body}} </p>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="my-5 mx-5">
            <h5 class="text-primary text-center"> {{__('front.services')}}</h5>
            <p class="text-center w-md-75 m-auto ">{{__('front.services description')}}</p>
        </div>
        <div class="row m-auto">
            @foreach ($services as $service)

            <div class="col-md-3 col-sm-6  col-12mb-4 m-auto">
                <div class="card">
                    <div class="rounded pt-4 d-flex align-items-center  justify-content-center">
                        <img src="{{asset('uploads/'.$service->image)}}" width="100px" alt="" class="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title text-center text-primary">

                             {{$service->title}}
                        </h5>
                        <p class="card-text text-center">
                            {!!Str::words($service->des,20)!!}
                                           </p>
                        <a href="{{route('front.services-show',$service->id)}}" >{{__('front.about service')}} <i class="fas fa-chevron-left"></i></a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    <div class="bg-gray mb-5 mt-3">
        <div class="container">
            <div class="row  py-4">
                <div class="col-12 card mb-3 bg-transparent shadow-none">
                    @if ($news)

                    <div class="row">
                      <div class="col-md-7 pl-5 order-md-1 order-12">

                        <div class="card-body">
                            <p class="card-text text-primary">{{__('front.last news')}}</p>
                            <h4 class="card-title">   {{$news->title}}   </h4>
                            <p class="card-text text-muted">     {!!Str::words($news->body,30)!!}</p>
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{route('blog-detaile',$news->id)}}">
                                    <span class="pl-2"> {{__('front.show more')}}</span>
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <p><small class="text-muted"> {{$news->created_at}}</small></p>
                            </div>
                        </div>

                      </div>
                      <div class="col-md-5 order-md-12 order-1">
                        <img class="card-img-top" src="{{asset('uploads/'.$news->image)}}" >
                      </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <div class=" d-flex justify-content-center align-items-center w-100" >
        <div class="p-3">
        <h5 class="text-primary text-center">{{__('front.subscribe with email')}}</h5>
        <p class="w-75 text-center mx-auto mb-4">{{__('front.subscribe with email2')}}</p>
        <form class="d-flex my-2 justify-content-center" action="{{route('maillist-sub')}} " method="POST">
            @csrf
            <div class="mb-3 subscribe">
                <input type="text" name="email" class="form-control rounded-pill bg-transparent subscribe-input form-control-lg" placeholder="{{__('front.enter email')}}" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <button class="btn btn-primary rounded-pill subscribe-button px-4 btn-lg" type="submit" id="button-addon1">{{__('front.subscribe')}}</button>
            </div>
        </form>
        </div>
    </div>
  
    <!-- /content -->
    @push('js')


    @endpush
@endsection
