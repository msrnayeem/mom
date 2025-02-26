@extends('layouts.app')

@section('content')
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        This is a secure area of the application. Please confirm your password before continuing.
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <label for="password" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                Password
            </label>

            <input id="password"
                class="block mt-1 w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-300 dark:bg-gray-800 dark:text-gray-200"
                type="password" name="password" required autocomplete="current-password" />

            @error('password')
                <span class="text-sm text-red-600 dark:text-red-400 mt-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-end mt-4">
            <button type="submit"
                class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-300">
                Confirm
            </button>
        </div>
    </form>
@endsection
