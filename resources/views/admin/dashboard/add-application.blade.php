@extends('admin.layout.partials')
@section('content')
<div class="content">
   
    <div class="container">
    <div class="card">
        <div class="card-header"><h4> {{__('dashboard.add app')}}</h4></div>
        <div class="card-body">
            <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="{{route('app.store')}}">
                @csrf
                <div class="form-group">
                    <label for="name"> {{__('dashboard.title')}}</label>
                    <input name="title" type="text" placeholder="" class="form-control">
                    @error('title')
                    <p class="invalid-feedback d-block"> {{$message}}</p>
                    @enderror
                </div>
               
               
                <div class="form-group">
                    <label for="name">{{__('dashboard.image')}}</label>
                    <input name="image" type="file"  class="form-control">
                    @error('image')
                    <p class="invalid-feedback d-block"> {{$message}}</p>
                    @enderror
                </div>
    
            
    
    
                <div class="form-group">
    
                <button type="submit" class="btn btn-primary">{{__('dashboard.add')}}</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div>
   
</div>
</div>
@push('js')
  
@endpush
@endsection