@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif



<div class="content">
    <div class="container">
            
   

        <br>
        <div class="page-title">
            <h3>{{__('dashboard.orders')}}
            </h3>
        </div>
    
        <div class="mb-4 mt-4">
          <a class="btn btn-primary" href="{{route('add_order')}}"> {{__('dashboard.add orders')}}</a>
      </div>



      <div>

        <div class="container m-auto">
            <ul class="nav nav-tabs mx-auto">
                <li class="nav-item col-md-3 col-6  "><a class="nav-link active" data-toggle="tab" href="#home">{{__('dashboard.all orders')}} ({{$orders->count()}}) </a></li>
                <li class="nav-item col-md-3 col-6 "><a class="nav-link" data-toggle="tab" href="#menu1">{{__('dashboard.new orders')}} ({{$new_orders->count()}})</a></li>
                <li class="nav-item col-md-3 col-6 "><a class="nav-link" data-toggle="tab" href="#menu2">{{__('dashboard.under review orders')}} ({{$underreview_orders->count()}})</a></li>
              
                <li class="nav-item col-md-3 col-6 "><a class="nav-link" data-toggle="tab" href="#menu3">{{__('dashboard.underway orders')}} ({{$underway_orders->count()}})</a></li>
                <li class="nav-item col-md-3 col-6 "><a class="nav-link" data-toggle="tab" href="#menu4">{{__('dashboard.complete orders')}} ({{$complete_orders->count()}})</a></li>
                <li class="nav-item col-md-3 col-6 "><a class="nav-link" data-toggle="tab" href="#menu5">{{__('dashboard.unacceptable orders')}} ({{$unacceptable_orders->count()}})</a></li>
                <li class="nav-item col-md-3 col-6 "><a class="nav-link" data-toggle="tab" href="#menu6">{{__('dashboard.canceled orders')}} ({{$canceled_orders->count()}})</a></li>
  
  

              
            </ul>
          
            <div class="tab-content">
              <div id="home" class="tab-pane fade show active">
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col">{{__('front.name')}}</th>
                                <th scope="col"> {{__('front.email')}} </th>
                                <th scope="col">{{__('front.phone')}}</th>
                                <th scope="col">{{__('dashboard.service')}}</th>
                                <th scope="col">{{__('dashboard.status')}}</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody class="orders">
                                <?php $x =1; ?>
                                @foreach ($orders as $order)
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->phone}}</td>
            
                                    <td>{{$order->service_title}}</td>
                                    <td scope="col">{{__('dashboard.'.$order->status)}}</td>
            
            
                                    <td>
                                        <a class="btn btn-primary"  href="{{route('show-orders',$order->id)}}"> {{__('dashboard.more')}}</a>
            
                                    </td>
                                  </tr>
                                
                                @endforeach
                             
                            </tbody>
                          </table>
                    </div>
                </div>

              </div>












              <div id="menu1" class="tab-pane fade">
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col">{{__('front.name')}}</th>
                                <th scope="col"> {{__('front.email')}} </th>
                                <th scope="col">{{__('front.phone')}}</th>
                                <th scope="col">{{__('dashboard.service')}}</th>
                                <th scope="col">{{__('dashboard.status')}}</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody class="orders">
                                <?php $x =1; ?>
                                @foreach ($new_orders as $order)
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->phone}}</td>
            
                                    <td>{{$order->service_title}}</td>
                                    <td scope="col">{{__('dashboard.'.$order->status)}}</td>
            
            
                                    <td>
                                        <a class="btn btn-primary"  href="{{route('show-orders',$order->id)}}"> {{__('dashboard.more')}}</a>
            
                                    </td>
                                  </tr>
                                
                                @endforeach
                             
                            </tbody>
                          </table>
                    </div>
                </div>

            </div>










           







              <div id="menu2" class="tab-pane fade">
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col">{{__('front.name')}}</th>
                                <th scope="col"> {{__('front.email')}} </th>
                                <th scope="col">{{__('front.phone')}}</th>
                                <th scope="col">{{__('dashboard.service')}}</th>
                                <th scope="col">{{__('dashboard.status')}}</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody class="orders">
                                <?php $x =1; ?>
                                @foreach ($underreview_orders as $order)
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->phone}}</td>
            
                                    <td>{{$order->service_title}}</td>
                                    <td scope="col">{{__('dashboard.'.$order->status)}}</td>
            
            
                                    <td>
                                        <a class="btn btn-primary"  href="{{route('show-orders',$order->id)}}"> {{__('dashboard.more')}}</a>
            
                                    </td>
                                  </tr>
                                
                                @endforeach
                             
                            </tbody>
                          </table>
                    </div>
                </div>           
               </div>










              <div id="menu3" class="tab-pane fade">
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col">{{__('front.name')}}</th>
                                <th scope="col"> {{__('front.email')}} </th>
                                <th scope="col">{{__('front.phone')}}</th>
                                <th scope="col">{{__('dashboard.service')}}</th>
                                <th scope="col">{{__('dashboard.status')}}</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody class="orders">
                                <?php $x =1; ?>
                                @foreach ($underway_orders as $order)
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->phone}}</td>
            
                                    <td>{{$order->service_title}}</td>
                                    <td scope="col">{{__('dashboard.'.$order->status)}}</td>
            
            
                                    <td>
                                        <a class="btn btn-primary"  href="{{route('show-orders',$order->id)}}"> {{__('dashboard.more')}}</a>
            
                                    </td>
                                  </tr>
                                
                                @endforeach
                             
                            </tbody>
                          </table>
                    </div>
                </div>              </div>






              <div id="menu4" class="tab-pane fade">
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col">{{__('front.name')}}</th>
                                <th scope="col"> {{__('front.email')}} </th>
                                <th scope="col">{{__('front.phone')}}</th>
                                <th scope="col">{{__('dashboard.service')}}</th>
                                <th scope="col">{{__('dashboard.status')}}</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody class="orders">
                                <?php $x =1; ?>
                                @foreach ($complete_orders as $order)
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->phone}}</td>
            
                                    <td>{{$order->service_title}}</td>
                                    <td scope="col">{{__('dashboard.'.$order->status)}}</td>
            
            
                                    <td>
                                        <a class="btn btn-primary"  href="{{route('show-orders',$order->id)}}"> {{__('dashboard.more')}}</a>
            
                                    </td>
                                  </tr>
                                
                                @endforeach
                             
                            </tbody>
                          </table>
                    </div>
                </div>              </div>







              <div id="menu5" class="tab-pane fade">
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col">{{__('front.name')}}</th>
                                <th scope="col"> {{__('front.email')}} </th>
                                <th scope="col">{{__('front.phone')}}</th>
                                <th scope="col">{{__('dashboard.service')}}</th>
                                <th scope="col">{{__('dashboard.status')}}</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody class="orders">
                                <?php $x =1; ?>
                                @foreach ($unacceptable_orders as $order)
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->phone}}</td>
            
                                    <td>{{$order->service_title}}</td>
                                    <td scope="col">{{__('dashboard.'.$order->status)}}</td>
            
            
                                    <td>
                                        <a class="btn btn-primary"  href="{{route('show-orders',$order->id)}}"> {{__('dashboard.more')}}</a>
            
                                    </td>
                                  </tr>
                                
                                @endforeach
                             
                            </tbody>
                          </table>
                    </div>
                </div>                      </div>

              <div id="menu6" class="tab-pane fade">
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col">{{__('front.name')}}</th>
                                <th scope="col"> {{__('front.email')}} </th>
                                <th scope="col">{{__('front.phone')}}</th>
                                <th scope="col">{{__('dashboard.service')}}</th>
                                <th scope="col">{{__('dashboard.status')}}</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody class="orders">
                                <?php $x =1; ?>
                                @foreach ($canceled_orders as $order)
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->phone}}</td>
            
                                    <td>{{$order->service_title}}</td>
                                    <td scope="col">{{__('dashboard.'.$order->status)}}</td>
            
            
                                    <td>
                                        <a class="btn btn-primary"  href="{{route('show-orders',$order->id)}}"> {{__('dashboard.more')}}</a>
            
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







     
    </div>
</div>
@push('js')
   
@endpush
@endsection