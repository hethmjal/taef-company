@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<br>
<div class="container mt-5">
    @can('create', App\Models\User::class)
    <div class="container">
      <a class="btn btn-primary" href="{{route('register')}}">{{__('front.add new user')}}  </a>
  </div>
    @endcan
 



<br>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">{{__('front.employe')}} </th>
        <th scope="col">{{__('front.email')}}</th>
        <th scope="col">{{__('front.phone')}} </th>
        <th scope="col"> {{__('front.type')}}</th>

        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php $x =1; ?>
    @foreach ($users as $user)
    <tr>
        <th scope="row"><?php  echo $x++; ?></th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone}}</td>
        <td>@if ($user->user_role){{$user->user_role->role->name}}@endif</td>



        <td>
          @can('update', $user)

            <a class="btn btn-primary" href=" {{route('user.edit',$user->id)}}">{{__('dashboard.edit')}}</a>
            @endcan
            @can('delete', $user)

            <a class="btn btn-danger" href="{{route('user.destroy',$user->id)}} ">{{__('dashboard.delete')}}</a>
            @endcan
            @can('role',  $user)

            <a class="btn btn-success" href="{{route('user.roles',$user->id)}}"> {{__('dashboard.update roles')}}</a>
            @endcan
        </td>
      </tr>
    
    @endforeach
    </tbody>
  </table>
  
</div>
  @endsection