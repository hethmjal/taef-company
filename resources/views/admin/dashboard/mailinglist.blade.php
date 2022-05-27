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
                        <div class="card-header"> <h4> {{__('dashboard.send mail')}} </h4></div>

                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <form action="{{route('toGroupMailPage')}}" method="post">
                                @csrf
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col">{{__('front.email')}}</th>

                                    <th scope="col">{{__('dashboard.select')}}</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $x =1; ?>
                                @foreach ($emails as $email)
                                <tr>
                                    <th scope="row"><?php  echo $x++; ?></th>
                                    <td>{{$email->email}}</td>
                                    <td>
                                        <input type="checkbox" class="checkbox" value="{{$email->email}}" name="emails[]" >
                                    </td>

                                  </tr>
                                
                                @endforeach
                                
                                </tbody>

                              </table>
                              <div class=" col-4 m-auto">
                                <label for="checkbox">{{__('dashboard.select all')}}</label>
                              <input type="checkbox" id="select_all" class="checkbox" value="" name="" >
                                  <input type="submit" class="btn btn-primary" value="{{__('dashboard.write the message')}}">
                            </div>
                        </form>
                        </div>
                        
                    </div>
                </div>
               
            </div>
        </div>
        
    </div>
    @push('js')
        <script>
            $('#select_all').change(function() {
        if($(this).is(':checked')) {
            $("input[type='checkbox']").attr('checked', 'checked');
        } else {
            $("input[type='checkbox']").removeAttr('checked');
        }
    });
        $("input[type='checkbox']").not('#select_all').change( function() {
        $('#select_all').removeAttr('checked');
    });
        </script>
    @endpush
@endsection