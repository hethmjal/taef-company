@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<div class="card mt-5 ml-5 mr-5 mb-5">
    <div class="mt-3 ml-3">
    <label for="">الصلاحيات:</label>

 





<form action="{{route('user.store_roles',$user->id)}}" method="post">
    @csrf
<div class="row">
 

    
    @foreach (config('abilities') as $key => $label)
    <div class="col-md-4">
    <div>
        <label for="">
            <input class="select_all" style="background: rgb(23, 182, 240)!important" type="checkbox" name="roles[]" @if($user->roles || $user->user_role->role->roles) @if(in_array($key,$user->roles)||in_array($key,$user->user_role->role->roles)) checked @endif @endif value="{{$key}}">
            <h4>{{__('dashboard.'.$key)}}</h4>
            <input  class="key" type="hidden" value="{{$key}}">
        </label>
    </div>
       
    <ul class="">
        @foreach ($label as $key2 => $item)
        <li>
            <label for="">
                <input class="{{$key}}" type="checkbox" name="roles[]" @if($user->roles || $user->user_role->role->roles) @if(in_array($key2,$user->roles)||in_array($key2,$user->user_role->role->roles)) checked @endif @endif value="{{$key2}}">
                {{$item}}
            </label>
        </li>
            @endforeach

        </ul>
    </div>
    @endforeach
  
  
</div>
<Button class="btn btn-success mt-5 mb-5 " type="submit">{{__('dashboard.update roles')}}  </Button>
</form>
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