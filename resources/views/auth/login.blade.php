<!-- copied posts->index cuz same base layout is used -->


@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            @if (session()->has('status'))
                {{ session('status') }}
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email"
                        class="bg-gray-200 border-2 w-full p-4 rounded-lg" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-red-600 mt-1 mb-2 text-sm">
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" placeholder="Set password"
                            class="bg-gray-200 border-2 w-full p-4 rounded-lg" value="">
                        @error('password')
                            <div class="text-red-600 mt-1 mb-2 text-sm">
                                {{ $message }}
                            @enderror
                        </div>


                        <div>
                            <button type="submit"
                                class="bg-sky-400/100 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                        </div>

            </form>
        </div>

    </div>
@endsection
