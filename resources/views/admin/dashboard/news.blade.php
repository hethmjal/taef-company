@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<br>
            <div class="content">
                <div class="container">
                    @can('create', App\Models\News::class)
                        
                    <div>
                        <a class="btn btn-primary" href="{{route('news.add')}}"> {{__('dashboard.add news')}}</a>
                    </div>
                    @endcan

                    <br>
                    <div class="page-title">
                        <h3>{{__('dashboard.news')}}
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col"> (ar){{__('dashboard.title')}}</th>
                                    <th scope="col"> (en){{__('dashboard.title')}}</th>
                                    <th scope="col">{{__('dashboard.image')}}</th>
                                    <th scope="col">(ar){{__('dashboard.detailes')}}</th>
                                    <th scope="col">(en){{__('dashboard.detailes')}}</th>
                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $x =1; ?>
                                @foreach ($news as $new)
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td>{{$new->artitle}}</td>
                                    <td>{{$new->entitle}}</td>

                                    <td>
                                        <img width="100px" height="100px" src="{{asset('uploads/'.$new->image)}}" />
                                    </td>
                                    <td>{!!Str::words( $new->arbody,10)!!}</td>
                                    <td>{!!Str::words( $new->enbody,10)!!}</td>

                                    <td>
                                        @can('update', $new)
                                        <a class="btn btn-outline-success btn-sm" href="{{route('news.edit',$new->id)}} "><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        @endcan

                                        @can('delete',$new )
                                        <a class="btn btn-outline-danger btn-sm" href="{{route('news.destroy',$new->id)}} "><i class="fa fa-trash" aria-hidden="true"></i></a>
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