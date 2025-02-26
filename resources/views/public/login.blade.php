@extends('layouts.app')

@section('content')
    <div class="container login-container mt-5">
        <div class="login-form">
            <h4 class="text-center mb-4" style="color: #006400;">আপনার সেশন শুরু করতে লগ ইন করুন</h4>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">ইমেইল</label>
                    <input id="email" type="email" name="email" class="form-control" placeholder="ইমেইল"
                        value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">পাসওয়ার্ড</label>
                    <input id="password" type="password" name="password" class="form-control" placeholder="পাসওয়ার্ড"
                        required>
                    @error('password')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="form-check-label">Remember me</label>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">লগ ইন</button>
                </div>
            </form>

            <div class="social-auth-links text-center mb-3">
                <p>- অথবা -</p>
                <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}" class="btn btn-primary w-100 mb-2">
                    <i class="bi bi-facebook me-2"></i> Facebook দ্বারা লগ ইন করুন
                </a>
                <a href="{{ route('social.redirect', ['provider' => 'google']) }}" class="btn btn-danger w-100">
                    <i class="bi bi-google me-2"></i> Google দ্বারা লগ ইন করুন
                </a>
            </div>
            <div class="text-center">
                <p class="mb-1"><a href="{{ route('password.request') }}" style="color: #006400;">পাসওয়ার্ড ভুলে
                        গেছেন?</a></p>
                <p class="mb-0"><a href="{{ route('register') }}" style="color: #006400;">রেজিস্টার করুন</a></p>
            </div>
        </div>
    </div>
@endsection

@php
    $noFooter = true;
@endphp
