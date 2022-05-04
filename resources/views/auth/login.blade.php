@extends('layouts.app')

@section('content')
    <main class="mt-10">

        <div class="min-h-screen bg-no-repeat bg-cover bg-center sm:shadow-sm sm:shadow-lg"
            style="background-image: url('https://t3.ftcdn.net/jpg/01/22/71/96/360_F_122719641_V0yw2cAOrfxsON3HeWi2Sf4iVxhv27QO.jpg')">
            <div class="flex justify-end">
                <div class="bg-white min-h-screen w-1/2 flex justify-center items-center">
                    <div>

                        <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                            action="{{ route('login') }}">
                            @csrf

                            <div>
                                <span class="text-sm text-gray-900">Welcome back</span>
                                <h1 class="text-2xl font-bold">Login to your account</h1>
                            </div>
                            <div class="my-3">
                                <label class="block text-md mb-2" for="email">Email</label>
                                <input id="email" type="email"
                                    class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="mt-5">
                                <label class="block text-md mb-2" for="password">Password</label>
                                <input id="password" type="password"
                                    class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                                    required autofocus>

                                @error('password')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="flex items-center">
                                <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                                    <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <span class="ml-2">{{ __('Remember Me') }}</span>
                                </label>

                                @if (Route::has('password.request'))
                                    <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline ml-auto"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="form-group row mb-0">
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-3">
                                        <a href="{{ route('login.github') }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-20 border-b-4 border-blue-700 hover:border-blue-500 rounded">Login with
                                            Github</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap">
                                <button type="submit"
                                    class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 border-b-4 border-blue-700 hover:border-blue-500 rounded sm:py-4 bg-blue-500 hover:bg-blue-400 text-white ">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('register'))
                                    <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                                        {{ __("Don't have an account?") }}
                                        <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline"
                                            href="{{ route('register') }}">
                                            {{ __('Register') }}
                                        </a>
                                    </p>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
