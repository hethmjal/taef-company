@extends('admin.layout.partials')
@section('content')
<div class="content">
    <div class="container">
    <div class="card">
        <div class="card-header"><h4> {{__('dashboard.add slider')}}</h4></div>
        <div class="card-body">
            <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="{{route('slider.update',$slider->id)}}">
                @csrf
                <div class="form-group">
                    <label for="name"> {{__('dashboard.title')}} </label>
                    <input name="title" type="text" placeholder="" value="{{$slider->title}}" class="form-control">
                    @error('title')
                    <p class="invalid-feedback d-block"> {{$message}}</p>
                    @enderror
                </div>
               
                <div class="form-group">
                    <label for="link"> {{__('dashboard.link')}} </label>
                    <input name="link" type="text" placeholder="" value="{{$slider->link}}" class="form-control">
                    @error('link')
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
                    <img id="blah" width="100px" height="100px" src="{{asset('uploads/'.$slider->image)}}" alt="your image" />
                </div>
            
    
             
                <div class="form-group">
    
                <button type="submit" class="btn btn-primary">{{__('dashboard.edit')}}</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div>
   
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
@endpush
@endsection