@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ request()->route('token') }}">

        <!-- Email Address -->
        <div>
            <label for="email" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                Email
            </label>

            <input id="email"
                class="block mt-1 w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-300 dark:bg-gray-800 dark:text-gray-200"
                type="email" name="email" value="{{ old('email', request()->email) }}" required autofocus
                autocomplete="username" />

            @error('email')
                <span class="text-sm text-red-600 dark:text-red-400 mt-2">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                Password
            </label>

            <input id="password"
                class="block mt-1 w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-300 dark:bg-gray-800 dark:text-gray-200"
                type="password" name="password" required autocomplete="new-password" />

            @error('password')
                <span class="text-sm text-red-600 dark:text-red-400 mt-2">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                Confirm Password
            </label>

            <input id="password_confirmation"
                class="block mt-1 w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-300 dark:bg-gray-800 dark:text-gray-200"
                type="password" name="password_confirmation" required autocomplete="new-password" />

            @error('password_confirmation')
                <span class="text-sm text-red-600 dark:text-red-400 mt-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit"
                class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-300">
                Reset Password
            </button>
        </div>
    </form>
@endsection
