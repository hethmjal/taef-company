
@extends('front.partials')
@section('content')
    <div class="content">
        <div class="container">
            <button id="save" type="button" class="btn btn_primary">Save</button>    
    
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
   <form action="" enctype="multipart/form-data" method="post">
        @csrf
    <div id="controls">
        <button id="recordButton">Record</button>
        <button id="pauseButton" disabled>Pause</button>
        <button id="stopButton" disabled>Stop</button>
     </div>
     <div id="formats">Format: start recording to see sample rate</div>
       <p><strong>Recordings:</strong></p>
       <ol id="recordingsList"></ol>
       <input class="email" type="email" name="email" value="asd@asd" id="email">
       <input type="file" class="file" name="file"  id="image">
    </form>
    @push('js')
    <script>
        var _token = "{{csrf_token()}}";
    </script>
    <script src="{{asset('js2/app.js')}}"></script>
    <script src="{{asset('js2/recorder.js')}}"></script>
    @endpush
 @endsection