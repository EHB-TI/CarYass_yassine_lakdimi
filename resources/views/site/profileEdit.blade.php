
@extends('layouts.app')

<link href="{{ asset('css/profileEdit.css') }}" rel="stylesheet">

<section class="vh-100 gradient-custom ">
    <div class=" py-3 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="formBody" style="border-radius: 1rem;">
                    <div class="card-body p-4 text-center ">

                        <div class="mb-md-5 mt-md-4 ">

                            <h2 class="fw-bold mb-2 text-uppercase">Edit your profile</h2>
                            <p class="text-white-50 mb-3">Please fill in following data!</p>
                            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="flex flex-wrap">
                                    <label for="image" class="block text-black-700 text-sm font-bold mb-2 sm:mb-4">
                                        {{ __('avatar') }}:
                                    </label>

                                    <input id="image" type="file" class="form-input w-full @error('image')  border-red-500 @enderror"
                                           name="image" value="{{$user->image}}" required autocomplete="image" autofocus >

                                    @error('image')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                    <div class="flex flex-wrap">
                                        <label for="name" class="block text-black-700 text-sm font-bold mb-2 sm:mb-4">
                                            {{ __('Name') }}:
                                        </label>

                                        <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
                                               name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>

                                    <div class="flex flex-wrap">
                                        <label for="email" class="block text-black-700 text-sm font-bold mb-2 sm:mb-4">
                                            {{ __('E-Mail Address') }}:
                                        </label>

                                        <input id="email" type="email"
                                               class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                                               value="{{$user->email}}" required autocomplete="email">

                                        @error('email')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                    <div class="flex flex-wrap">
                                        <label for="email" class="block text-black-700 text-sm font-bold mb-2 sm:mb-4">
                                            {{ __('Birthday') }}:
                                        </label>
                                        <input id="birthday" type="date" value="2013_1_5"
                                               class="form-input w-full @error('birthday') border-red-500 @enderror" name="birthday"
                                               autocomplete="birthday">

                                        @error('birthday')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror

                                    </div>
                                <div class="flex flex-wrap">
                                    <label for="about" class="block text-black-700 text-sm font-bold mb-2 sm:mb-4">
                                        {{ __('About me') }}:
                                    </label>

                                    <input id="about" type="text" class="form-input w-full @error('about')  border-red-500 @enderror"
                                           name="about" value="{{$user->about}}" required autocomplete="about" autofocus>

                                    @error('name')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <button type="submit">Submit</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
