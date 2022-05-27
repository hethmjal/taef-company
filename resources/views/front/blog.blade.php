
@extends('front.partials')
@section('content')

    <!-- content -->
    <nav aria-label="breadcrumb">
        <h5 class="text-primary text-center  mt-5">{{__('front.blog')}}</h5>
        <ol class="breadcrumb bg-transparent  justify-content-center">
          <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i> {{__('front.home')}} </a></li>
          <li class="breadcrumb-item"><a href="{{route('blog')}}">{{__('front.blog')}}</a></li>
        </ol>
    </nav>
    <section class="container mb-5">
        @if ($lastnews)

        <div class="row  mb-5">
            <div class="col-12 card mb-3 bg-transparent shadow-none">
                <div class="row">
                  <div class="col-md-7 pl-5 order-md-1 order-12">

                    <div class="card-body">
                        <p class="card-text text-primary">{{__('front.last news')}}</p>
                        <h4 class="card-title">   {{$lastnews->title}}   </h4>
                        <p class="card-text text-muted">     {!!Str::words($lastnews->body,30)!!}</p>
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
                    <img class="card-img-top" src="{{asset('uploads/'.$lastnews->image)}}" >
                  </div>
                </div>
            </div>
        </div>
        @endif

        <div class="row mb-5">
            @if ($news)

            @foreach ($news as $new)

            <div class="col-md-4 col-sm-6 col-12 mb-4">
                <div class="card card-info h-100 rounded">
                    <img src="{{asset('uploads/'.$new->image)}}" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">   {{$new->title}}   </h5>

                        <p class="card-text">
                            {!!Str::words($new->body,30)!!}
                        </p>
                        <a href="{{route('blog-detaile',$new->id)}}"> {{__('front.show more')}}</a>
                    </div>
                </div>
            </div>

            @endforeach
@endif
        </div>
    </section>

    <!-- /content -->
    @endsection
