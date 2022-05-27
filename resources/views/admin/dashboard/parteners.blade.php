@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<br>
<div class="container mt-5">
  @can('create', App\Models\Partners::class)
  <div class="container">
    <a class="btn btn-primary" href="{{route('parteners.add')}}">{{__('dashboard.add partner')}}  </a>
</div>
  @endcan
  
<br>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">(ar){{__('front.name')}} </th>
        <th scope="col">(en){{__('front.name')}} </th>

        <th scope="col">{{__('dashboard.image')}}</th>
        <th scope="col">(ar){{__('dashboard.detailes')}}</th>
        <th scope="col">(en){{__('dashboard.detailes')}}</th>

        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php $x =1; ?>
    @foreach ($parteners as $partener)
    <tr>
        <th scope="row"><?php  echo $x++; ?></th>
        <td>{{$partener->arname}}</td>
        <td>{{$partener->enname}}</td>
        <td>
            <img width="100px" height="100px" src="{{asset('uploads/'.$partener->logo)}}" />
        </td>

        <td>{!!Str::words($partener->ardes,10)!!}</td>
        <td>{!!Str::words($partener->endes,10)!!}</td>

        <td>
          @can('update', $partener)
          <a class="btn btn-outline-success btn-sm" href="{{route('parteners.edit',$partener->id)}} "><i class="fa fa-edit" aria-hidden="true"></i></a>

          @endcan
          @can('delete', $partener)

            <a class="btn btn-outline-danger btn-sm" href="{{route('parteners.destroy',$partener->id)}} "><i class="fa fa-trash" aria-hidden="true"></i></a>
            @endcan
        </td>
      </tr>
    
    @endforeach
    </tbody>
  </table>
  
</div>
  @endsection