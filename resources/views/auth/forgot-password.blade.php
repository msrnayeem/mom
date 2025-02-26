@extends('layouts.app')

@section('content')
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        Forgot your password? No problem. Just let us know your email address, and we will email you a password reset link
        that will allow you to choose a new one.
    </div>

    <!-- Session Status -->
    @if (session('status'))
        <div class="mb-4 text-sm text-green-600 dark:text-green-400">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                Email
            </label>

            <input id="email"
                class="block mt-1 w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-300 dark:bg-gray-800 dark:text-gray-200"
                type="email" name="email" value="{{ old('email') }}" required autofocus />

            @error('email')
                <span class="text-sm text-red-600 dark:text-red-400 mt-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit"
                class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-300">
                Email Password Reset Link
            </button>
        </div>
    </form>
@endsection
