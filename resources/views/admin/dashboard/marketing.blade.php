@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<br>
<div class="container">
  <a class="btn btn-primary" href="{{route('app.add')}}">{{__('dashboard.add app')}}</a>
</div>
<div class="container mt-5 row">
    @foreach ($marketings as $item)
        <div class="col-6">
  <div class="card" style="width: 500px;">
    <div class="card-body">
      <div class="row no-gutters">
        <div class="col-sm-5">
          <div class="row align-items-center">
            <img class="img" width="50px" src="{{asset('uploads/'.$item->image)}}" alt="Suresh Dasari Card">
            <div class="mx-3">
              <h5 class="card-title text-info">{{$item->name}}</h5>
              <p class="card-text"><small class="text-muted"><i class="far fa-clock text-warning"></i> {{$item->updated_at->diffForHumans()}}</small></p>
            </div>
         
          </div>
           

        </div>

        <div class="w-100 text-right">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#code{{$item->id}}">
            <i class="fas fa-code"></i>
            {{__('dashboard.add code')}}
          </button>
          
          <a href="{{route('app.destroy',$item->id)}}" class="btn btn-danger">
            <i class="fas fa-trash"></i>
            {{__('dashboard.delete')}}
          </a>
        </div>
    </div>
    </div>
  
</div>

<!-- Modal -->
<div class="modal fade" id="code{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$item->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('app.add_code')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$item->id}}">
            <div class="modal-body">
        <div class="form-group">
          <label for="name">{{__('dashboard.code')}}</label>
        <textarea  name="code" class="form-control" cols="30" rows="10">{{$item->code}}</textarea>
   
        @error('code')
        <p class="invalid-feedback d-block"> {{$message}}</p>
        @enderror
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('dashboard.close')}}</button>
        <button type="submit" class="btn btn-primary">{{__('dashboard.add')}}</button>
      </form>

      </div>
    </div>
  </div>
</div>
</div>
@endforeach



<div class="col-6">
  <div class="card" style="width: 500px;">
    <div class="card-body">
      <div class="row no-gutters">
        <div class="col-sm-5">
          <div class="row align-items-center">
            <img class="img" width="50px"  src="{{asset('uploads/'.$sms->image)}}" alt="sms">
            <div class="mx-3">
              <h5 class="card-title text-info mb-5">sms data</h5>
              
              <p class="card-text"><small class="text-muted"><i class="far fa-clock text-warning"></i> {{$sms->updated_at->diffForHumans()}}</small></p>
            </div>
         
          </div>
           

        </div>

        <div class="w-100 text-right">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sms">
            <i class="fas fa-code"></i>
            {{__('dashboard.add code')}}
          </button>
       
         
        </div>
    </div>
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="sms" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sms</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          
      
      <form action="{{route('app.sms')}}" enctype="multipart/form-data" method="post">
        @csrf
        <input type="hidden"   @if ($sms)value="{{$sms->id}}"@endif name="id">
            <div class="modal-body">
              <div class="form-group">
                  <label for="name">{{__('username')}}</label>
                  <input name="username" type="text" placeholder=""   @if ($sms)value="{{$sms->username}}"@endif class="form-control">
                  @error('username')
                  <p class="invalid-feedback d-block"> {{$message}}</p>
                  @enderror
              </div>
  
              <div class="form-group">
                  <label for="name">{{__('user sender')}}</label>
                  <input name="user_sender"  @if ($sms)value="{{$sms->user_sender}}"@endif  type="text" placeholder=" " class="form-control">
                  @error('user_sender')
                  <p class="invalid-feedback d-block"> {{$message}}</p>
                  @enderror
              </div>

              <div class="form-group">
                <label for="name">{{__('api_key')}}</label>
                <input name="api_key" type="text"  @if ($sms) value="{{$sms->api_key}}"@endif placeholder="" class="form-control">
                @error('api_key')
                <p class="invalid-feedback d-block"> {{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
              <label for="name">{{__('dashboard.file')}}</label>
              <input name="image"  type="file" placeholder=" "   class="form-control">
              @error('user_sender')
              <p class="invalid-feedback d-block"> {{$message}}</p>
              @enderror
          </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('dashboard.close')}}</button>
        <button type="submit" class="btn btn-primary">{{__('dashboard.add')}}</button>
      </form>

      </div>
    </div>
  </div>
</div>
</div>
@push('js')


<script src="{{asset('/js/modalpopup.js')}}"></script>

@endpush
  @endsection