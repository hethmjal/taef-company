@extends('admin.layout.partials')
@section('content')
<div class="content">
    <div class="container">
    <div class="card">
        <div class="card-header"> {{__('dashboard.edit news')}}</div>
        <div class="card-body">
            <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="{{route('news.update',$new->id)}}">
                @csrf
                <div class="form-group">
                    <label for="name"> (ar){{__('dashboard.title')}} </label>
                    <input name="artitle" type="text" placeholder="العنوان" value="{{$new->artitle}}" class="form-control">
                    @error('artitle')
                    <p class="invalid-feedback d-block"> {{$message}}</p>
                    @enderror
                </div>
               
                <div class="form-group">
                    <label for="name">(en){{__('dashboard.title')}} </label>
                    <input name="entitle" type="text" placeholder="العنوان" value="{{$new->entitle}}" class="form-control">
                    @error('entitle')
                    <p class="invalid-feedback d-block"> {{$message}}</p>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="name">{{__('dashboard.image')}}</label>
                    <input accept="image/*" type='file' name="image" id="imgInp" class="form-control" />
                    @error('image')
                    <p class="invalid-feedback d-block"> {{$message}}</p>
                    @enderror
                  
                </div>
    
                <div class="form-group">
                    <label for="name">{{__('dashboard.current image')}}:</label>
                    <img id="blah" width="100px" height="100px" src="{{asset('uploads/'.$new->image)}}" alt="your image" />
                </div>
            
                
                <div class="form-group">
                    <label for="name">(ar){{__('dashboard.detailes')}}</label>
                  <textarea id="arbody" name="arbody" class="form-control" cols="30" rows="10">{!!$new->arbody!!}</textarea>
             
                  @error('arbody')
                  <p class="invalid-feedback d-block"> {{$message}}</p>
                  @enderror
                   </div>
    
                   <div class="form-group">
                    <label for="name">(en){{__('dashboard.detailes')}}</label>
                  <textarea id="enbody" name="enbody" class="form-control" cols="30" rows="10">{!!$new->enbody!!}</textarea>
             
                  @error('enbody')
                  <p class="invalid-feedback d-block"> {{$message}}</p>
                  @enderror
                   </div>
            
    
    
    
    
                <div class="form-group">
    
                <button type="submit" class="btn btn-primary">{{__('dashboard.edit')}}</button>
            </div>
            </form>
        </div>
    </div>
<div>
   
</div>
    </div>
</div>
@push('js')
<script>
    imgInp.onchange = evt => {
             const [file] = imgInp.files
             if (file) {
               blah.src = URL.createObjectURL(file)
             }
           }
</script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('arbody');
CKEDITOR.replace('enbody');

</script>  
@endpush
@endsection