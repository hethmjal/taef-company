@extends('front.partials')
@section('content')
<!-- content -->
<div class="content">
    @if (session('success'))
    <div class="container form-group alert alert-success">{{session('success')}}</div>
    @endif
    <nav aria-label="breadcrumb">

        <h4 class="text-primary text-center  mt-5"> {{__('front.contact us')}} </h4>
            <ol class="breadcrumb  justify-content-center  mb-md-2 mb-0">
                <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i> {{__('front.home')}} </a></li>
                <li class="breadcrumb-item"><a href="{{route('front.contact_us')}}"> {{__('front.contact us')}}</a></li>
            </ol>
            </nav>
    <div class="container w-md-75">
        <div class=" bg-light-rounded d-flex justify-content-center mx-md-5 p-5 ">
            <div class=" align-items-center">
                <h5 class="font-weight-bold text-center">{{__('front.good connection')}}</h5>
                <div class="my-5 text-center">
                    <form action="{{route('front.storemessage')}}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <input type="text" class="form-control in-shadow border-0 rounded-pill" placeholder=" {{__('front.name')}} "
                                name="name" required>
                        </div>
                        <div class="form-group mb-4">
                            <input type="text" dir='auto' name="email" class="form-control in-shadow border-0 rounded-pill"
                                placeholder=' {{__('front.email')}}' required>
                        </div>
                        <div class="form-group mb-4">
                            <input type="phone" class="form-control in-shadow border-0 rounded-pill"
                                placeholder=' {{__('front.phone')}}' name="phone">
                        </div>
                        <div class="form-group mb-4">
                            <textarea class="form-control in-shadow border-0 rounded" placeholder="{{__('front.message')}}" name="message" rows="3"
                                required></textarea>
                        </div>
                        {!! NoCaptcha::display() !!}
                                @error('g-recaptcha-response')
                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                @enderror
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit"
                                class="btn btn-lg btn-primary rounded-pill mx-auto px-4 text-white">{{__('front.send')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection