@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif



<div class="content">
    <div class="container">



        <div class="card col-8 m-auto">
          <div class="card-body">
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-striped ">
                    <thead>
                      <tr>
                        <th scope="col">{{__('front.name')}}</th>
                        <td scope="col">{{$order->name}} </td>
                      </tr>
                      <tr>
                        <th scope="col">{{__('front.facility name')}}</th>
                        <td scope="col">{{$order->facility_name}} </td>
                      </tr>
                      <tr>
                        <th scope="col">{{__('front.phone')}}</th>
                        <td scope="col"> {{$order->phone}} </td>
                      </tr>

                      <tr>
                        <th scope="col">{{__('front.email')}}</th>
                        <td scope="col"> {{$order->email}}</td>
                      </tr>
                      <tr>
                        <th scope="col">{{__('front.city')}}</th>
                        <td scope="col"> {{$order->city}}</td>
                      </tr>
                      <tr>
                        <th scope="col">{{__('dashboard.service')}}</th>
                        <td>{{$order->service_title}}</td>
                      </tr>
                      <tr>
                        <th scope="col">{{__('front.message')}}</th>
                        <td scope="col"> {{$order->message}}</td>
                      </tr>

                      <tr>
                        <th scope="col">{{__('dashboard.status')}}</th>
                        <form action="{{route('change-status',$order->id)}}" method="post">
                          @csrf

                        <td scope="col">
                           <select class="form-control" name="status" id="">

                          <option value="new">{{__('dashboard.new')}}</option>
                          <option value="under review">{{__('dashboard.under review')}}</option>
                          <option value="underway">{{__('dashboard.underway')}}</option>
                          <option value="unacceptable">{{__('dashboard.unacceptable')}}</option>
                          <option value="canceled">{{__('dashboard.canceled')}}</option>
                          <option value="complete">{{__('dashboard.complete')}}</option>
                        </select>
                      </td>



                        <td scope="col">
                          <input type="submit" value="{{__('dashboard.change status')}}" class="btn btn-primary">

                        </td>
                      </form>

                      </tr>
                    </thead>

                  </table>
                  <div class="container  ">
                    <a href="{{route('sendMessagePage2',$order->id)}}" class="btn btn-primary m-auto ">{{__('dashboard.send mail')}}</a>
                    <a href="{{route('sendPhoneMessagePage',$order->phone)}}" class="btn btn-primary m-auto ">{{__('dashboard.send phone mail')}}</a>

                  </div>
            </div>
          </div>
        </div>

        </div>

    </div>
</div>

@push('js')
<script>
  $("select").val(`<?php echo $order->status ;?>`).change();

</script>
@endpush


@endsection
