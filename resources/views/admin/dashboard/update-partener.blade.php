@extends('admin.layout.partials')
@section('content')



<div class="card mt-5 ml-5 mr-5 mb-5">
    <div class="card-header">{{__('dashboard.edit partner')}} </div>
    <div class="card-body">
        <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="{{route('parteners.update',$partner->id)}}">
            @csrf
            <div class="form-group">
                <label for="name">(ar){{__('front.name')}}</label>
                <input name="arname" type="text" placeholder="اسم الشريك" value="{{$partner->arname}}" class="form-control">
                @error('arname')
                <p class="invalid-feedback d-block"> {{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">(en){{__('front.name')}}</label>
                <input name="enname" type="text" placeholder=" " value="{{$partner->enname}}" class="form-control">
                @error('enname')
                <p class="invalid-feedback d-block"> {{$message}}</p>
                @enderror
            </div>
           
          
            

            <div class="form-group">
                <label for="name">{{__('dashboard.image')}}</label>
                <input accept="image/*" type='file' name="logo" id="imgInp" class="form-control" />
                @error('logo')
                <p class="invalid-feedback d-block"> {{$message}}</p>
                @enderror
            </div>


            <div class="form-group">
                <label for="name">{{__('dashboard.current image')}}:</label>
                <img id="blah" width="100px" height="100px" src="{{asset('uploads/'.$partner->logo)}}" alt="your image" />
            </div>


            <div class="form-group">
                <label for="name">{{__('dashboard.gallery')}}</label>
                <input name="gallary[]" type="file" multiple  class="form-control">
            </div>
            <div class="col-md-7">
                <div class="row">
                    @foreach ($partner->images as $image)
                    <div class="image{{$image->id}} position-relative col-md-2">
                        <input type="hidden" class="image_id" value="{{$image->id}}">

                        <button type="button" class="delete position-absolute  btn btn-sm btn-danger">
                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                        </button>
                        <img src="{{asset('uploads/'.$image->path)}}"  width="80px" height="80px">
                    </div>

                    @endforeach

                </div>
            </div>


            <div class="form-group">
                <label for="name">(ar){{__('dashboard.detailes')}}</label>
              <textarea id="ardes" name="ardes" class="form-control" cols="30" rows="10">{!!$partner->endes!!}</textarea>
         
              @error('ardes')
              <p class="invalid-feedback d-block"> {{$message}}</p>
              @enderror
               </div>

               <div class="form-group">
                <label for="name">(en){{__('dashboard.detailes')}}</label>
              <textarea id="endes" name="endes" class="form-control" cols="30" rows="10">{!!$partner->endes!!}</textarea>
         
              @error('endes')
              <p class="invalid-feedback d-block"> {{$message}}</p>
              @enderror
               </div>

               <div class="form-group">
                <label for="name">{{__('dashboard.link')}}</label>
                <input name="link" type="text" placeholder=" " value="{{$partner->link}}" class="form-control">
                @error('link')
                <p class="invalid-feedback d-block"> {{$message}}</p>
                @enderror
            </div>

            <div class="form-group">

            <button type="submit" class="btn btn-primary">{{__('dashboard.edit')}}</button>
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



<script>
    imgInp.onchange = evt => {
             const [file] = imgInp.files
             if (file) {
               blah.src = URL.createObjectURL(file)
             }
           }
</script>

<script>
$(".delete").click(function(e) {

    e.preventDefault();
    $id =$(this).parent().find(".image_id").val();
    console.log($id);
    $.ajax({
        type: "GET",
        url: "/dashboard/image/destroy",
        data: { 
            id: $(this).parent().find(".image_id").val(), // < note use of 'this' here
        },
        success: function(result) {
           // alert('ok');
            console.log(result);
            $(".image"+result.id).hide();
        },
        error: function(result) {
          //  alert('error');
        }
    });
});
</script>
@endpush
@endsection