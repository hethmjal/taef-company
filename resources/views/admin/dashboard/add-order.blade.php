   
@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<div class="content">
        
        <div class="container w-md-75">
            <div class=" bg-light-rounded d-flex justify-content-center mx-md-5 p-5 ">
                <div class=" align-items-center">
                    <div class="my-5 ">
                        <form action="{{route('dashboard.storeorder')}}" method="POST">
                            @csrf
                            <div class="row">
                            <div class="col-12 mb-4">
                                <span class="text-primary h5 mx-2">{{__('front.info')}}</span>
                            </div>
                            <div class="col-12 form-group mb-4">
                                <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="{{__('front.name')}}" id="name" >
                                @error('name')
                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-12 form-group mb-4">
                                <input type="text" class="form-control"  value="{{ old('job_title') }}" name="job_title" placeholder='{{__('front.job title')}}' >
                                @error('job_title')
                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-12 form-group mb-4">
                                <input type="text"dir='auto' class="form-control"  value="{{ old('email') }}" name="email" placeholder='{{__('front.email')}}' >
                                @error('email')
                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-12 form-group mb-4">
                                <input class="form-control" type="tel" value="{{ old('phone') }}" id="phone" name="phone" placeholder="">

                               
                            </div>

                            <div class="col-12 form-group mb-4">
                                <input type="text" class="form-control" value="{{ old('facility_name') }}" name="facility_name" placeholder='{{__('front.facility name')}}' id="phone">
                                @error('facility_name')
                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                @enderror
                            </div>

                        
                            <div class="col-12 form-group mb-4">
                                <input type="text" class="form-control" value="{{ old('city') }}"  name="city" placeholder='{{__('front.city')}}' id="phone">
                                @error('city')
                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                @enderror
                            </div>
                            
                          
                            <div class="col-12 form-group mb-4">
                                <select class="form-control" name="service_id" id="">

                                    @foreach ($services as $service)
                                        <option value="{{$service->id}}">{{$service->title}}</option>
                                    @endforeach
                                </select>
                                @error('services')
                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                @enderror
                            </div>

                           
                          
                           
                           
                            <div class="col-12 form-group mb-4">
                                <p class="mb-4">
                                    {{__('front.can subscribe')}}
                                </p>
                                <div class="custom-control custom-radio custom-control-inline w-50">
                                    <input type="radio" id="customRadioInline1" value="yes" name="subscribe" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1">{{__('front.yes')}}</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" value="no" name="subscribe" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">{{__('front.no')}}</label>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <img src="{{asset('/assets/image/Recaptcha_anchor@2x.png')}}" width="100%">
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn  btn-primary rounded-pill mx-auto px-4 text-white">{{__('front.subscribe')}}</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
    <script src="{{asset('/front/js/intlTelInput.js')}}"></script>
    <script>
 
           </script>


    <script>
        
        var input = document.querySelector("#phone");
window.intlTelInput(input, {

  utilsScript: "{{asset('/front/js/utils.js')}}" // just for formatting/placeholders etc
});





      var input = document.querySelector("#phone");
      window.intlTelInput(input, {
        // any initialisation options go here
        hiddenInput: "full_phone",
        utilsScript: "{{asset('/front/js/utils.js')}}",
        customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
      console.log(selectedCountryData.iso2);
      if (selectedCountryData.iso2=='sa') {
        return "512345678";
      }else{
        return selectedCountryPlaceholder;
      }
    
  },
      });

     
      


   
    </script>
   
    @endpush
   @endsection