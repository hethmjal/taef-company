@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<br>
<div class="container mt-5">
    @can('create', App\Models\Group::class)
    <div class="container">
      <a class="btn btn-primary" href="{{route('group.create')}}">{{__('dashboard.add group')}}</a>
  </div>
    @endcan
 



<br>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">{{__('dashboard.group name')}}  </th>
        <th scope="col"> {{__('dashboard.num of users')}} </th>
        <th scope="col"> </th>

        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php $x =1; ?>
    @foreach ($groups as $group)
   
    <tr>
    
        <th scope="row"><?php  echo $x++; ?></th>
        <td> <a href="{{route('groups',$group->name)}}"> {{$group->name}}    </a></td> 
        <td>@if($group->usersNumber){{ count($group->usersNumber)}}@else 0 @endif</td>


        <td>
  
            @can('delete', $group)

              <a class="btn btn-outline-success btn-sm" href=" {{route('group.edit',$group->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
              @endcan
              @can('delete',$group)

              <a class="btn btn-outline-danger btn-sm" href="{{route('group.destroy',$group->id)}} "><i class="fa fa-trash" aria-hidden="true"></i></a>
             @endcan
          </td>
      </tr>

    @endforeach
    </tbody>
  </table>
  
</div>
<form accept-charset="utf-8" enctype="multipart/form-data" method="POST" @if ($g)
action="{{route('group.update',$g->id)}}"  
@endif >
  @csrf
<div class="container">
  <label for="">الصلاحيات:</label>

  <div class="row">

            @csrf
       
    @foreach (config('abilities') as $key => $label)
    <div class="col-md-4">
    <div>
        <label for="">
            <input class="select_all" style="background: rgb(23, 182, 240)!important" type="checkbox" name="roles[]" @if($g) @if(in_array($key,$g->roles)) checked @endif @endif value="{{$key}}">
            <h4>{{__('dashboard.'.$key)}}</h4>
            <input  class="key" type="hidden" value="{{$key}}">
        </label>
    </div>
       
    <ul class="">
        @foreach ($label as $key2 => $item)
        <li>
            <label for="">
                <input class="{{$key}}" type="checkbox" name="roles[]" @if($g) @if(in_array($key2,$g->roles)) checked @endif @endif value="{{$key2}}">
                {{$item}}
            </label>
        </li>
            @endforeach

        </ul>
    </div>
    @endforeach
  
</div>
<div class="form-group m-auto">

  <button  class="btn btn-primary">{{__('dashboard.edit')}}</a>
</div>
</form>
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