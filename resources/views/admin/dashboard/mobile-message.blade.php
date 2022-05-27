@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif


<div class="card mt-5 ml-5 mr-5 mb-5">
    <div class="card-header"> <h4> {{__('dashboard.send phone mail')}} </h4></div>
    <br>
    <div class="card-body">
        <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="{{route('sendPhoneMessage')}}">
            @csrf
            <input type="hidden" name="number" value="{{$number}}">
            
    
           
         
  
            <div class="form-group">
                <label for="name">{{__('dashboard.message body')}}</label>
              <textarea id="body" name="body" class="form-control" cols="30" rows="10"></textarea>
         
              @error('body')
              <p class="invalid-feedback d-block"> {{$message}}</p>
              @enderror
               </div>



            <div class="form-group">

            <button type="submit" class="btn btn-primary">{{__('dashboard.send')}}</button>
        </div>
        </form>
    </div>
</div>
</div>
@push('js')

  
@endpush
@endsection