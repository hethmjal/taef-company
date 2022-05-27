@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<br>
            <div class="content">
                <div class="container">
                   
                    <br>
                    <div class="page-title">
                        <h3>{{__('dashboard.messages')}}
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col">{{__('front.name')}}</th>
                                    <th scope="col"> {{__('front.email')}}</th>
                                    <th scope="col"> {{__('front.phone')}}</th>
                                    <th scope="col">{{__('front.message')}}</th>

                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $x =1; ?>
                                @foreach ($messages as $message)
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                  
                                    <td>{{$message->name}}</td>
                                    <td>{{ $message->email}}</td>
                                    <td>{{$message->phone}}</td>

                                    <td>{{Str::words($message->message,10)}}</td>
                                    <td>
                                        <a class="btn btn-primary"  href="{{route('dashboard.show-messages',$message->id)}}"> {{__('dashboard.more2')}}</a>
            
                                    </td>
                                  </tr>
                                
                                @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection