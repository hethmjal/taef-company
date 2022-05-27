@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<br>
            <div class="content">
                <div class="container">
                    @can('create', App\Models\Services::class)
                    <div>
                        <a class="btn btn-primary" href="{{route('service.add')}}">{{__('dashboard.add service')}} </a>
                    </div>
                    @endcan

                    <br>

                    <div class="page-title">
                        <h3>{{__('front.services')}}
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col">{{__('dashboard.image')}}</th>
                                    <th scope="col"> (ar){{__('dashboard.title')}}</th>
                                    <th scope="col"> (en){{__('dashboard.title')}}</th>
                                    <th scope="col">(ar){{__('dashboard.detailes')}}</th>
                                    <th scope="col">(en){{__('dashboard.detailes')}}</th>

                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $x =1; ?>
                                @foreach ($services as $service)
                                <tr>
                                    <th class="" scope="row"><?php  echo $x++; ?></th>
                                    <td>
                                        <img width="50px" height="50px" src="{{asset('uploads/'.$service->image)}}" />
                                    </td>
                                    <td class="col-2">{{$service->artitle}}</td>
                                    <td class="col-2">{{ $service->entitle}}</td>
                                    <td class="col-3">{!! Str::words( $service->ardes,5)!!}</td>
                                    <td class="col-3">{!!Str::words( $service->endes,5)!!}</td>


                                    <td class="col-3">
                                        @can('update', $service)
                                        <a class="btn btn-outline-success btn-sm" href="{{route('service.edit',$service->id)}} "><i class="fas fa-edit"></i></a>
                                        @endcan

                                        @can('delete', $service)
                                        <a class="btn btn-outline-danger btn-sm" href="{{route('service.destroy',$service->id)}} "><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        @endcan


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
