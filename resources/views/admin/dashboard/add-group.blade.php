@extends('admin.layout.partials')
@section('content')


<div class="card mt-5 ml-5 mr-5 mb-5">
    <div class="card-header"> <h4>  {{__('dashboard.add group')}}</h4></div>
    <br>
    <div class="card-body">
        <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="{{route('group.store')}}">
            @csrf
<div class="form-group">

    <label for="name">{{__('front.name')}}</label>
    <input name="name" type="text" placeholder=" " class="form-control">
    @error('name')
    <p class="invalid-feedback d-block"> {{$message}}</p>
    @enderror
</div>


  <label for="">{{__('dashboard.roles')}}:</label>

  <div class="row">
 

    
    @foreach (config('abilities') as $key => $label)
    <div class="col-md-4">
    <div>
        <label for="">
            <input class="select_all" style="background: rgb(23, 182, 240)!important" type="checkbox" name="roles[]"  value="{{$key}}">
            <h4>{{__('dashboard.'.$key)}}</h4>
            <input  class="key" type="hidden" value="{{$key}}">
        </label>
    </div>
       
    <ul class="">
        @foreach ($label as $key2 => $item)
        <li>
            <label for="">
                <input class="{{$key}}" type="checkbox" name="roles[]"  value="{{$key2}}">
                {{$item}}
            </label>
        </li>
            @endforeach

        </ul>
    </div>
    @endforeach
  
  
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


         $('.select_all').change(function() {
            var key =$(this).parent().find(".key").val();
            console.log(key);
        if($(this).is(':checked')) {
            $("."+key).attr('checked', 'checked');
        } else {
            $("."+key).removeAttr('checked');
        }
    });
        $("input[type='checkbox']").not('#select_all').change( function() {
        $('#select_all').removeAttr('checked');
    });
    </script>
@endpush

@endsection