
@extends('front.partials')
@section('content')
    <div class="content">
        <div class="container">
    
         </div>
        <div class="container">
            <div class="d-flex justify-content-center p-3">
                <div class=" align-items-center">
                    <div class="my-md-5 my-4 text-center">
                        <span><img src="{{asset('/assets/image/undraw_Browser_stats_re_j7wy.png')}}" width="100%"></span>
                    </div>
                    <h3 class="font-weight-bold text-center"> {{__('front.soon')}} </h3>
                    
                </div>
            </div>
        </div>
    </div>
 
    @push('js')
    <script>
        var _token = "{{csrf_token()}}";
    </script>
    <script src="{{asset('js2/app.js')}}"></script>
    <script src="{{asset('js2/recorder.js')}}"></script>
    @endpush
 @endsection