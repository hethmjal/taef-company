@extends('admin.layout.partials')
@section('content')
<div class="content">
    <div class="container">

    <div class="card">
        <div class="card-header"><h4> {{__('dashboard.add service')}}</h4></div>
        <div class="card-body">
            <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="{{route('service.store')}}">
                @csrf
           
                <div class="form-group">
                    <label for="name">(ar){{__('dashboard.title')}}</label>
                    <input name="artitle" type="text" placeholder=" " class="form-control">
                    @error('artitle')
                    <p class="invalid-feedback d-block"> {{$message}}</p>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="name">(en){{__('dashboard.title')}}</label>
                    <input name="entitle" type="text" placeholder=" " class="form-control">
                    @error('entitle')
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
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('ardes');
CKEDITOR.replace('endes');

</script>  

@endpush

@endsection