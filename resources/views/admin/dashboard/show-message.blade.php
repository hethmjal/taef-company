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
                        <td scope="col">{{$message->name}} </td>
                      </tr>
                     
                      <tr>
                        <th scope="col">{{__('front.phone')}}</th>
                        <td scope="col"> {{$message->phone}} </td>
                      </tr>
                     
                      <tr>
                        <th scope="col">{{__('front.email')}}</th>
                        <td scope="col"> {{$message->email}}</td>
                      </tr>
                     
                     
                      <tr>
                        <th scope="col">{{__('front.message')}}</th>
                        <td scope="col"> {{$message->message}}</td>
                      </tr>

                      
                    </thead>
                  
                  </table>
                  <div class="container  ">
                    <a href="{{route('sendMessagePage2',$message->id)}}" class="btn btn-primary m-auto ">{{__('dashboard.send mail')}}</a>
                    <a href="{{route('sendPhoneMessagePage',$message->phone)}}" class="btn btn-primary m-auto ">{{__('dashboard.send phone mail')}}</a>

                  </div>
            </div>
          </div>
        </div>
       
        </div>
        
    </div>
</div>



@endsection