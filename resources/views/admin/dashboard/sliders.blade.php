@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<br>
            <div class="content">
                @can('create', App\Models\Slider::class)
                <div>
                    <a class="btn btn-primary" href="{{route('slider.add')}}"> {{__('dashboard.add slider')}}</a>
                </div>
                @endcan
                <div class="container">
                 
                    <br>
                    <div class="page-title">
                        <h3>{{__('dashboard.sliders')}}
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col">{{__('dashboard.image')}}</th>
                                    <th scope="col">{{__('dashboard.title')}}</th>
                                    <th scope="col">{{__('dashboard.link')}}</th>


                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $x =1; ?>
                                @foreach ($sliders as $slider)
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td>
                                        <img width="100px" height="100px" src="{{asset('uploads/'.$slider->image)}}" />
                                    </td>
                                    <td>{{$slider->title}}</td>
                                    <td>{{$slider->link}}</td>

                                    <td>
                                        @can('update', $slider)
                                        <a class="btn btn-outline-success btn-sm" href="{{route('slider.edit',$slider->id)}} "><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        @endcan
                                        
                                        @can('delete', $slider)
                                        <a class="btn btn-outline-danger btn-sm" href="{{route('slider.destroy',$slider->id)}} "><i class="fa fa-trash" aria-hidden="true"></i></a>
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