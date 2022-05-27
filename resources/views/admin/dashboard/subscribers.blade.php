@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<br>
<div class="container mt-5">
  
<br>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">الاسم</th>
        <th scope="col">رقم الهاتف</th>
        <th scope="col">البريد الالكتروني</th>
        <th scope="col">المبلغ</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php $x =1; ?>
    @foreach ($subscribers as $subscriber)
    <tr>
        <th scope="row"><?php  echo $x++; ?></th>
        <td>{{$subscriber->name}}</td>
        <td>
            {{$subscriber->phone}}
        </td>
        <td> {{$subscriber->email}} </td>
        <td>{{$subscriber->amount}}$</td>

        <td>
            <a class="btn btn-primary" href="{{route('subscriber.reminder',$partener->id)}} ">تذكير</a>
            <a class="btn btn-danger" href="{{route('subscriber.destroy',$partener->id)}} ">حذف</a>
        </td>
      </tr>
    
    @endforeach
    </tbody>
  </table>
  
</div>
  @endsection