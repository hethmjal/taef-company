@extends('admin.layout.partials')
@section('content')
<div class="content">
    <div class="container">
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <x-guest-layout>
                <x-auth-card>
                    <x-slot name="logo">
                        <a href="/">
                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                        </a>
                    </x-slot>
            
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
                    <form method="POST" action="{{ route('user.update',$user->id) }}">
                        @csrf
            
                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('front.name')" />
            
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')??$user->name" required autofocus />
                        </div>
            
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('front.email')" />
            
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')??$user->email" required />
                        </div>
            
                       <!-- Phone Address -->
            
                        <div class="mt-4">
                            <x-label for="email" :value="__('front.phone')" />
            
                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')??$user->phone" required autofocus />
                        </div>

                        <div class="mt-4 ">
                            <x-label for="type" :value="__('dashboard.roles group')" />

                           <select class="block mt-1 w-full select" name="group" id="">
                               <option value=""></option>
                               @foreach ($groups as $group)
                               <option value="{{$group->id}}">{{$group->name}}</option>
                               @endforeach

                           </select>
                        </div>
                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('front.password')" />
            
                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                        </div>
            
                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('front.confirm password')" />
            
                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required />
                        </div>
            
                        <div class="flex items-center justify-end mt-4">
                         
            
                            <x-button class="ml-4">
                                {{ __('dashboard.edit') }}
                            </x-button>
                        </div>
                    </form>
                </x-auth-card>
            </x-guest-layout>
            
        </div>
    </div>
</div>
<div>
   
</div>
</div>
@push('js')
<script>
    $(".select").val({{$user->user_role->role->id}}).change();

</script>
@endpush
@endsection