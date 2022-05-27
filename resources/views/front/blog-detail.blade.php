
@extends('front.partials')
@section('content')

    <!-- content -->
    <div class="Content">
        <div class="container">
            <nav aria-label="breadcrumb">
                <h5 class="text-primary text-center  mt-5">{{__('front.blog')}}</h5>
                <ol class="breadcrumb bg-transparent  justify-content-center">
                  <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i> {{__('front.home')}} </a></li>
                  <li class="breadcrumb-item"><a href="{{route('blog')}}">{{__('front.blog')}}</a></li>
                  <li class="breadcrumb-item"><a href="{{route('blog-detaile',$news->id)}}">{{$news->title}}</a></li>
                </ol>
            </nav>
            <img src="{{asset('uploads/'.$news->image)}}"width='100%' class="img-fluid">
            <div class="page-content-header mt-5">
                <h3 class="font-weight-bold mb-4 text-primary">{{$news->title}}</h3>
                
           
            
            </div>
            <div class="page-content-body">
               {!!$news->body!!}
            </div>
            <div class="row">
                <div class="col-12 card shadow-sm p-3 mb-5 bg-white rounded">
                    <div class="row">
                      <div class="col-md-7 pl-5 order-md-1 order-12">
                        <div class="card-body">
                            <p class="card-text text-primary d-md-block d-none">{{__('front.last news')}}</p>
                            <h4 class="card-title">{{$lastnews->title}}</h4>
                            <p class="card-text text-muted">{!!Str::words($lastnews->body,30)!!}</p>
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{route('blog-detaile',$lastnews->id)}}">
                                    <span class="pl-2"> {{__('front.show more')}}</span>
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <p><smail class="text-muted"> {{$lastnews->created_at}}</smail></p>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-5 order-md-12 order-1">
                            <p class="card-text text-primary d-md-none d-block">{{__('fornt.last news')}} </p>
                            <img class="card-img-top" src="{{asset('uploads/'.$lastnews->image)}}" >
                      </div>
                    </div>
                </div>
            </div>

            <div class=" d-flex justify-content-center align-items-center w-100" >
                <div class="p-3">
                <h5 class="text-primary text-center">{{__('front.subscribe with email')}}</h5>
                <p class="w-75 text-center mx-auto mb-4">{{__('front.subscribe with email2')}}</p>
                <form class="d-flex my-2 justify-content-center">
                    <div class="mb-3 subscribe">
                        <input type="text" class="form-control rounded-pill bg-transparent subscribe-input form-control-lg" placeholder="{{__('front.enter email')}}" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <button class="btn btn-primary rounded-pill subscribe-button px-4 btn-lg" type="button" id="button-addon1">{{__('front.subscribe')}}</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- /content -->

    @endsection