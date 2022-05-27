@extends('admin.layout.partials')
@section('content')

<div class="container ">
    <div class="card">
        <div class="card-header">
            <h4> {{__('dashboard.content')}} </h4>
        </div>
        <div class="card-body">
            <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="{{route('tif_desc')}}">
                @csrf
                <div class="container">
                    <div class="form-group">
                        <label for="name"> (ar){{__('dashboard.title')}} </label>
                        <input name="artitle1" type="text" value="@if ($image1){{$image1->artitle}}@endif"
                            placeholder="{{__('dashboard.title')}}" class="form-control">
                        @error('artitle1')
                        <p class="invalid-feedback d-block"> {{$message}}</p>
                        @enderror
                    </div>



                    <div class="form-group">
                        <label for="name">(en){{__('dashboard.title')}} </label>
                        <input name="entitle1" type="text" value="@if ($image1){{$image1->entitle}}@endif"
                            placeholder="{{__('dashboard.title')}}" class="form-control">
                        @error('entitle1')
                        <p class="invalid-feedback d-block"> {{$message}}</p>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="name">{{__('dashboard.image')}}</label>
                        <input name="image1" type="file" onchange="loadFile(event,'firstImg')" class="form-control">
                        @error('image1')
                        <p class="invalid-feedback d-block"> {{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">{{__('dashboard.current image')}}:</label>
                     @if($image1)   <img id="firstImg" width="100px" height="100px" src="{{asset('uploads/'.$image1->image)}}"
                            alt="your image" /> @endif
                    </div>


                    <div class="form-group">
                        <label for="name">(ar){{__('dashboard.description')}}</label>
                        <textarea id="arbody1" name="arbody1" class="form-control" cols="20"
                            rows="6">@if ($image1){{$image1->arbody}}@endif</textarea>

                        @error('arbody1')
                        <p class="invalid-feedback d-block"> {{$message}}</p>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="name">(en){{__('dashboard.description')}}</label>
                        <textarea id="enbody1" name="enbody1" class="form-control" cols="20"
                            rows="6">@if ($image1){{$image1->enbody}}@endif</textarea>

                        @error('enbody1')
                        <p class="invalid-feedback d-block"> {{$message}}</p>
                        @enderror
                    </div>
                </div>


                <hr>

                <div class="container">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="name"> (ar){{__('dashboard.title')}} </label>
                            <input name="artitle2" type="text" value="@if ($image2){{$image2->artitle}}@endif"
                                placeholder="{{__('dashboard.title')}}" class="form-control">
                            @error('artitle2')
                            <p class="invalid-feedback d-block"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">(en){{__('dashboard.title')}} </label>
                            <input name="entitle2" type="text" value="@if ($image2){{$image2->entitle}}@endif"
                                placeholder="{{__('dashboard.title')}}" class="form-control">
                            @error('entitle2')
                            <p class="invalid-feedback d-block"> {{$message}}</p>
                            @enderror
                        </div>
                        <label for="name">{{__('dashboard.image')}}</label>
                        <input name="image2" type="file" onchange="loadFile(event,'seconedImg')" class="form-control">
                        @error('image2')
                        <p class="invalid-feedback d-block"> {{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('dashboard.current image')}}:</label>
                        @if($image2)       <img id="seconedImg" width="100px" height="100px" src="{{asset('uploads/'.$image2->image)}}"
                            alt="your image" /> @endif
                    </div>

                    <div class="form-group">
                        <label for="name">(ar){{__('dashboard.description')}}</label>
                        <textarea id="arbody2" name="arbody2" class="form-control" cols="20"
                            rows="6">@if ($image2){{$image2->arbody}}@endif</textarea>

                        @error('arbody2')
                        <p class="invalid-feedback d-block"> {{$message}}</p>
                        @enderror
                    </div>



                    <div class="form-group">
                        <label for="name">(en){{__('dashboard.description')}}</label>
                        <textarea id="enbody2" name="enbody2" class="form-control" cols="20"
                            rows="6">@if ($image2){{$image2->enbody}}@endif</textarea>

                        @error('enbody2')
                        <p class="invalid-feedback d-block"> {{$message}}</p>
                        @enderror
                    </div>
                </div>


                <hr>


                <div class="container">
                    <div class="form-group">
                        <label for="name"> (ar){{__('dashboard.title')}} </label>
                        <input name="artitle3" type="text" value="@if ($image3) {{$image3->artitle}}@endif"
                            placeholder="{{__('dashboard.title')}}" class="form-control">
                        @error('artitle3')
                        <p class="invalid-feedback d-block"> {{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">(en){{__('dashboard.title')}} </label>
                        <input name="entitle3" type="text" value="@if ($image3) {{$image3->entitle}}@endif"
                            placeholder="{{__('dashboard.title')}}" class="form-control">
                        @error('entitle3')
                        <p class="invalid-feedback d-block"> {{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">{{__('dashboard.image')}}</label>
                        <input name="image3" type="file" onchange="loadFile(event,'thirdImg')" class="form-control">
                        @error('image3')
                        <p class="invalid-feedback d-block"> {{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">{{__('dashboard.current image')}}:</label>
                        @if($image3)                 <img id="thirdImg" width="100px" height="100px" src="{{asset('uploads/'.$image3->image)}}"
                            alt="your image" /> @endif
                    </div>

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
                        <textarea id="enbody3" name="enbody3" class="form-control" cols="20"
                            rows="6">@if ($image3){{$image3->enbody}}@endif</textarea>

                        @error('enbody')
                        <p class="invalid-feedback d-block"> {{$message}}</p>
                        @enderror
                        </ </div>
                    </div>


                    <div class="container form-group">

                        <button type="submit" class="btn btn-primary">{{__('dashboard.add')}}</button>
                    </div>


            </form>
        </div>
    </div>
</div>

@push('js')
<script>
  var loadFile = function(event,id) {
    var output = document.getElementById(id);
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
@endpush
@endsection
