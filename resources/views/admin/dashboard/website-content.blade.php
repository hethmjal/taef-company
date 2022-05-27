@extends('admin.layout.partials')
@section('content')

<div class="content">
    @if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif 
<div class="row mb-5 col-8 m-auto">

  <div class="card col-5 "   data-toggle="modal" data-target="#brief1">
    <div class="card-header m-auto">
      <h6 class="text-primary m-auto">
        {{__('dashboard.add')}} {{__('dashboard.brief')}}    </h6>
    </div>
    <div class="card-body m-auto">
      <i class="fas fa-plus "></i>
    </div>
  </div>

  <div class="card col-5 mr-3"  data-toggle="modal" data-target="#brief2">
    <div class="card-header m-auto">
      <h6 class="text-primary m-auto">
        {{__('dashboard.add')}} {{__('dashboard.brief2')}} 
      </h6>
    </div>
    <div class="card-body m-auto">
      <i class="fas fa-plus "></i>
    </div>
  </div>
<a href="{{route('home_content')}}" class=" col-5 ">
  <div class="card " >
    <div class="card-header m-auto">
      <h6 class="text-primary m-auto">
        {{__('dashboard.add')}} {{__('dashboard.content')}}
      </h6>
    </div>
    <div class="card-body m-auto">
      <i class="fas fa-plus "></i>
    </div>
  </div>
</a>
</div>

   























<!-- Modal -->
<div class="modal fade" id="brief1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{__('dashboard.brief')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="card">
            <div class="card-header"><h4> {{__('dashboard.brief')}} </h4></div>
            <div class="card-body">
                <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="{{route('brief1')}}">
                    @csrf          
                    <div class="form-group">
                        <label for="name">(ar){{__('dashboard.description')}}</label>
                      <textarea id="arbody" name="arbody" class="form-control" cols="20" rows="6">@if($brief1)
                        {{$brief1->arbody}}
                      @endif </textarea>
                 
                      @error('arbody')
                      <p class="invalid-feedback d-block"> {{$message}}</p>
                      @enderror
                       </div>
        
                       <div class="form-group">
                        <label for="name">(en){{__('dashboard.description')}}</label>
                      <textarea id="enbody" name="enbody" class="form-control" cols="20" rows="6">@if($brief1){{$brief1->enbody}}@endif</textarea>
                 
                      @error('enbody')
                      <p class="invalid-feedback d-block"> {{$message}}</p>
                      @enderror
                       </div>   
        
        
                    <div class="form-group">
        
                    <button type="submit" class="btn btn-primary">{{__('dashboard.add')}}</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('dashboard.close')}}</button>

                </div>
                </form>
            </div>
        </div>
  
        </div>
      </div>
    </div>







<!-- Modal -->
<div class="modal fade" id="brief2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{__('dashboard.brief2')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="card">
            <div class="card-header"><h4> {{__('dashboard.brief2')}} </h4></div>
            <div class="card-body">
                <form accept-charset="utf-8" enctype="multipart/form-data" method="POST" action="{{route('brief2')}}">
                    @csrf          
                    <div class="form-group">
                        <label for="name">(ar){{__('dashboard.description')}}</label>
                      <textarea id="arbody" name="arbody" class="form-control" cols="20" rows="6">@if($brief2)
                        {{$brief2->arbody}}
                      @endif </textarea>
                 
                      @error('arbody')
                      <p class="invalid-feedback d-block"> {{$message}}</p>
                      @enderror
                       </div>
        
                       <div class="form-group">
                        <label for="name">(en){{__('dashboard.description')}}</label>
                      <textarea id="enbody" name="enbody" class="form-control" cols="20" rows="6">@if($brief2){{$brief2->enbody}}@endif</textarea>
                 
                      @error('enbody')
                      <p class="invalid-feedback d-block"> {{$message}}</p>
                      @enderror
                       </div>   
        
        
                    <div class="form-group">
        
                    <button type="submit" class="btn btn-primary">{{__('dashboard.add')}}</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('dashboard.close')}}</button>

                </div>
                </form>
            </div>
        </div>
  
        </div>
      </div>
    </div>


    
        </div>
    </div>
</div>
<div>
   
</div>
</div>

@push('js')
<script>
  var loadFile = function(event,id) {
    var output = document.getElementById(id);
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
@endpush
@endsection


