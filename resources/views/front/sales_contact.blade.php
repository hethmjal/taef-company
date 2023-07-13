   
@extends('front.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<div class="content">
        <nav aria-label="breadcrumb">
            <h4 class="text-center mb-md-2 mb-0">{{__('front.services')}}</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb  justify-content-center  mb-md-2 mb-0">
                  <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i> {{__('front.home')}} </a></li>
                  <li class="breadcrumb-item"><a href="{{route('front.services')}}">{{__('front.services')}}</a></li>
              <li class="breadcrumb-item">{{__('front.subscribe now')}}</li>
            </ol>
        </nav>
        <div class="container w-md-75">
            <div class=" bg-light-rounded d-flex justify-content-center mx-md-5 p-5 ">
                <div class=" align-items-center">
                    <h4 class="font-weight-bold text-center">{{__('front.contact sales')}}</h4>
                    <p class="text-center">{{__('front.fill')}}</p>
                    <div class="my-5 ">
                        <form action="{{route('front.storeorder')}}" method="POST">
                            @csrf
                            <input type="hidden" name="service_id" value="{{$service->id}}">
                            <div class="row">
                            <div class="col-12 mb-4">
                                <span class="text-primary h5 mx-2">{{__('front.info')}}</span>
                            </div>
                            <div class="col-12 form-group mb-4">
                                <input type="text" class="form-control in-shadow border-0 rounded-pill" value="{{ old('name') }}" name="name" placeholder="{{__('front.name')}}" id="name" >
                                @error('name')
                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-12 form-group mb-4">
                                <input type="text" class="form-control in-shadow border-0 rounded-pill"  value="{{ old('job_title') }}" name="job_title" placeholder='{{__('front.job title')}}' >
                                @error('job_title')
                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-12 form-group mb-4">
                                <input type="text"dir='auto' class="form-control in-shadow border-0 rounded-pill"  value="{{ old('email') }}" name="email" placeholder='{{__('front.email')}}' >
                                @error('email')
                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-12 form-group mb-4">
                                <input class="form-control in-shadow border-0 rounded-pill" type="tel" value="{{ old('phone') }}" id="phone" name="phone" placeholder="">

                               
                            </div>

                            <div class="col-12 form-group mb-4">
                                <input type="text" class="form-control in-shadow border-0 rounded-pill" value="{{ old('facility_name') }}" name="facility_name" placeholder='{{__('front.facility name')}}' id="phone">
                                @error('facility_name')
                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-12 form-group mb-4">
                                <input type="text" class="form-control in-shadow border-0 rounded-pill" value="{{ old('city') }}"  name="city" placeholder='{{__('front.city')}}' id="phone">
                                @error('city')
                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                @enderror
                            </div>
                            
                          
                           

                           
                          
                            <div class="col-12 my-4">
                                <span class="text-primary h5 mx-2">{{__('front.inquire')}}</span>
                            </div>
                            <div class="col-12 form-group mb-4">
                                <textarea class="form-control in-shadow border-0 rounded" name="message" placeholder="{{__('front.any question')}}" rows="3">{{ old('message') }}</textarea>
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
                              {{--   {!! NoCaptcha::display() !!}
                                @error('g-recaptcha-response')
                                <p class="invalid-feedback d-block"> {{$message}}</p>
                                @enderror

 --}}
                                
                         
                            
                           


                            <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-lg btn-primary rounded-pill mx-auto px-4 text-white">{{__('front.subscribe')}}</button>
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
    <script src="https://www.google.com/recaptcha/api.js"></script>



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
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>
<script>
         grecaptcha.ready(function() {
             grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {action: 'contact'}).then(function(token) {
                if (token) {
                  document.getElementById('recaptcha').value = token;
                }
             });
         });
</script>
    @endpush
   @endsection