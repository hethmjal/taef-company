@extends('admin.layout.partials')
@section('content')


<div class="card mt-5 ml-5 mr-5 mb-5">
    <div class="card-header"> <h4>  {{__('dashboard.add partner')}} </h4></div>
    <br>
    <div class="card-body">
        <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="{{route('parteners.store')}}">
            @csrf
            <div class="form-group">
                <label for="name">(ar){{__('front.name')}}</label>
                <input name="arname" type="text" placeholder=" " class="form-control">
                @error('arname')
                <p class="invalid-feedback d-block"> {{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">(en){{__('front.name')}}</label>
                <input name="enname" type="text" placeholder=" " class="form-control">
                @error('enname')
                <p class="invalid-feedback d-block"> {{$message}}</p>
                @enderror
            </div>
           
          
            

            <div class="form-group">
                <label for="name">{{__('dashboard.image')}}</label>
                <input name="logo" type="file"  class="form-control">
                @error('logo')
                <p class="invalid-feedback d-block"> {{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">{{__('dashboard.gallery')}}</label>
                <input name="gallary[]" type="file" multiple  class="form-control">
            </div>
         
  
            <div class="form-group">
                <label for="name">(ar){{__('dashboard.detailes')}}</label>
              <textarea id="ardes" name="ardes" class="form-control" cols="30" rows="10"></textarea>
         
              @error('ardes')
              <p class="invalid-feedback d-block"> {{$message}}</p>
              @enderror
               </div>

               <div class="form-group">
                <label for="name">(en){{__('dashboard.detailes')}}</label>
              <textarea id="endes" name="endes" class="form-control" cols="30" rows="10"></textarea>
         
              @error('endes')
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

            <button type="submit" class="btn btn-primary">{{__('dashboard.add')}}</button>
        </div>
        </form>
    </div>
</div>
</div>
@push('js')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('ardes');
CKEDITOR.replace('endes');

</script>  
@endpush
@endsection