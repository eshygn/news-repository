<!-- copied posts->index cuz same base layout is used -->


@extends('layouts.app')


@section("content")
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="mb-2">
                <label for="firstname" class="sr-only">First Name</label>
                <input type="text" name="firstname" id="firstname" placeholder="First Name" class="bg-gray-200 border-2 w-full p-4 rounded-lg" value="{{old('firstname')}}">

                @error('firstname')
                    <div class="text-red-600 mt-1 mb-2 text-sm">
                        {{$message}}
                @enderror
                <!-- if error for firstname, anything inside rendered out in the front page -->
            </div>

            <div class="mb-2">
                <label for="lastname" class="sr-only">Last Name</label>
                <input type="text" name="lastname" id="lastname" placeholder="Last Name" class="bg-gray-200 border-2 w-full p-4 rounded-lg" value="{{old('lastname')}}">

                @error('lastname')
                    <div class="text-red-600 mt-1 mb-2 text-sm">
                        {{$message}}
                @enderror
            </div>

            <div class="mb-2">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" class="bg-gray-200 border-2 w-full p-4 rounded-lg" value="{{old('username')}}">
                @error('username')
                    <div class="text-red-600 mt-1 mb-2 text-sm">
                        {{$message}}
                @enderror
            </div>

            <div class="mb-2">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" placeholder="Email" class="bg-gray-200 border-2 w-full p-4 rounded-lg" value="{{old('email')}}">
                @error('email')
                    <div class="text-red-600 mt-1 mb-2 text-sm">
                        {{$message}}
                @enderror
            </div>

            <div class="mb-2">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Set password" class="bg-gray-200 border-2 w-full p-4 rounded-lg" value="">
                @error('password')
                    <div class="text-red-600 mt-1 mb-2 text-sm">
                        {{$message}}
                @enderror
            </div>

            <div class="mb-2">
                <label for="password_confirmation" class="sr-only">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" class="bg-gray-200 border-2 w-full p-4 rounded-lg" value="">
            </div>

            <div>
                <button type="submit" class="bg-sky-400/100 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </div>

        </form>
    </div>

</div>

@endsection
