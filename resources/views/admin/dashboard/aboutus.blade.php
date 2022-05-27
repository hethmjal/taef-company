@extends('admin.layout.partials')
@section('content')

<div class="content">
    @if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
    <div class="container">

        <div class="card">
            <div class="card-header"><h4> {{__('dashboard.aboutus3')}} </h4></div>
            <div class="card-body">
                <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="{{route('aboutuscontent')}}">
                    @csrf   
                    <div class="container">
                        <div class="form-group">
                            <label for="name">{{__('dashboard.image')}}</label>
                            <input accept="image/*" type='file' name="image" id="imgInp" class="form-control" />
                            @error('image')
                            <p class="invalid-feedback d-block"> {{$message}}</p>
                            @enderror
                          
                        </div>
            
                        <div class="form-group">
                            <label for="name">{{__('dashboard.current image')}}:</label>
                            <img id="blah" width="100px" height="100px" src="@if ($aboutus){{asset('uploads/'.$aboutus->image)}}@endif" alt="your image" />
                        </div>
                    




                    <div class="form-group">
                        <label for="name">(ar){{__('dashboard.description')}}</label>
                      <textarea id="arbody" name="arbody" class="form-control" cols="20" rows="6">@if ($aboutus){{$aboutus->arbody}}@endif</textarea>
                 
                      @error('arbody')
                      <p class="invalid-feedback d-block"> {{$message}}</p>
                      @enderror
                       </div>
        
    
                       <div class="form-group">
                        <label for="name">(en){{__('dashboard.description')}}</label>
                      <textarea id="enbody" name="enbody" class="form-control" cols="20" rows="6">@if ($aboutus){{$aboutus->enbody}}@endif</textarea>
                 
                      @error('enbody')
                      <p class="invalid-feedback d-block"> {{$message}}</p>
                      @enderror
                       </div>  
                    </div>
        
                    <div class="form-group">
        
                    <button type="submit" class="btn btn-primary">{{__('dashboard.add')}}</button>
                </div>
                </form>
            </div>
        </div>

















    <div class="card">
        <div class="card-header"><h4> {{__('dashboard.aboutus2')}} </h4></div>
        <div class="card-body">
            <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="{{route('imagecontent')}}">
                @csrf   
                <div class="container">
                <h6>1-{{__('dashboard.our vision')}}</h6>
              

                <div class="form-group">
                    <label for="name">(ar){{__('dashboard.description')}}</label>
                  <textarea id="arbody1" name="arbody1" class="form-control" cols="20" rows="6">@if ($image1){{$image1->arbody}}@endif</textarea>
             
                  @error('arbody1')
                  <p class="invalid-feedback d-block"> {{$message}}</p>
                  @enderror
                   </div>
    

                   <div class="form-group">
                    <label for="name">(en){{__('dashboard.description')}}</label>
                  <textarea id="enbody1" name="enbody1" class="form-control" cols="20" rows="6">@if ($image1){{$image1->enbody}}@endif</textarea>
             
                  @error('enbody1')
                  <p class="invalid-feedback d-block"> {{$message}}</p>
                  @enderror
                   </div>  
                </div>


<hr>

<div class="container">
    <h6>2-{{__('dashboard.our message')}}</h6>
                  
                <div class="form-group">
                    <label for="name">(ar){{__('dashboard.description')}}</label>
                  <textarea id="arbody2" name="arbody2" class="form-control" cols="20" rows="6">@if ($image2){{$image2->arbody}}@endif</textarea>
             
                  @error('arbody2')
                  <p class="invalid-feedback d-block"> {{$message}}</p>
                  @enderror
                   </div>
    


                   <div class="form-group">
                    <label for="name">(en){{__('dashboard.description')}}</label>
                  <textarea id="enbody2" name="enbody2" class="form-control" cols="20" rows="6">@if ($image2){{$image2->enbody}}@endif</textarea>
             
                  @error('enbody2')
                  <p class="invalid-feedback d-block"> {{$message}}</p>
                  @enderror
                   </div>  
</div>


<hr>


<div class="container">
    <h6>3-{{__('dashboard.our goal')}}</h6>
                  
                <div class="form-group">
                    <label for="name">(ar){{__('dashboard.description')}}</label>
                  <textarea id="arbody3" name="arbody3" class="form-control" cols="20" rows="6">@if ($image3)
                    {{$image3->arbody}}@endif
                  </textarea>
             
                  @error('arbody3')
                  <p class="invalid-feedback d-block"> {{$message}}</p>
                  @enderror
                   </div>
    
                   <div class="form-group">
                    <label for="name">(en){{__('dashboard.description')}}</label>
                  <textarea id="enbody3" name="enbody3" class="form-control" cols="20" rows="6">@if ($image3){{$image3->enbody}}@endif</textarea>
             
                  @error('enbody')
                  <p class="invalid-feedback d-block"> {{$message}}</p>
                  @enderror
                   </div>  
</div>
    
                <div class="form-group">
    
                <button type="submit" class="btn btn-primary">{{__('dashboard.add')}}</button>
            </div>
            </form>
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
    @endpush
@endsection