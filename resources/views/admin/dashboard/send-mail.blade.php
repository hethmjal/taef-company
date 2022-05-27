@extends('admin.layout.partials')
@section('content')


<div class="card mt-5 ml-5 mr-5 mb-5">
    <div class="card-header"> <h4> {{__('dashboard.send  mail')}} </h4></div>
    <br>
    <div class="card-body">
        <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="">
            @csrf
            <input type="hidden" name="number" value="{{$number}}">
            <div class="form-group">
                <label for="name">{{__('dashboard.title')}}</label>
                <input name="title" type="text" placeholder=" " class="form-control">
                @error('title')
                <p class="invalid-feedback d-block"> {{$message}}</p>
                @enderror
            </div>

    
           
         
  
            <div class="form-group">
                <label for="name">{{__('dashboard.message body')}}</label>
              <textarea id="body" name="body" class="form-control" cols="30" rows="10"></textarea>
         
              @error('body')
              <p class="invalid-feedback d-block"> {{$message}}</p>
              @enderror
               </div>


               <div class="form-group">
                <label for="name">{{__('dashboard.link')}}</label>
                <input name="link" type="text" placeholder=" " class="form-control">
                @error('link')
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
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('body');

</script>  
@endpush
@endsection