@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<br>
            <div class="content">
                @can('create', App\Models\Searches::class)
                <div>
                    <a class="btn btn-primary" href="{{route('search.add')}}"> {{__('dashboard.add search')}}</a>
                </div>
                @endcan
                <div class="container">
                 
                    <br>
                    <div class="page-title">
                        <h3>{{__('front.searches')}}
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col">{{__('dashboard.image')}}</th>
                                    <th scope="col">(ar){{__('dashboard.title')}}</th>
                                    <th scope="col">(en){{__('dashboard.title')}}</th>

                                    <th scope="col">(ar){{__('dashboard.detailes')}}</th>
                                    <th scope="col">(en){{__('dashboard.detailes')}}</th>
                                    <th scope="col">{{__('dashboard.file')}}</th>

                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $x =1; ?>
                                @foreach ($searches as $search)
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td>
                                        <img width="100px" height="100px" src="{{asset('uploads/'.$search->image)}}" />
                                    </td>
                                    <td>{{$search->artitle}}</td>
                                    <td>{{ $search->entitle}}</td>
                                    <td>{!! Str::words( $search->ardes,10)!!}</td>
                                    <td>{!!Str::words( $search->endes,10)!!}</td>

                                    <td>{{$search->file}}</td>

                                    <td>
                                        @can('update', $search)
                                        <a class="btn btn-outline-success btn-sm" href="{{route('search.edit',$search->id)}} "><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        @endcan
                                        
                                        @can('delete', $search)
                                        <a class="btn btn-outline-danger btn-sm" href="{{route('search.destroy',$search->id)}} "><i class="fa fa-trash" aria-hidden="true"></i></a>
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