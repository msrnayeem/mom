@extends('layouts.app')

@section('content')
    <div class="container register-container mt-4">
        <div class="register-form">
            <h4 class="text-center mb-4" style="color: #006400;">নতুন অ্যাকাউন্ট তৈরি করুন</h4>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <!-- Full Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">পূর্ণ নাম</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" placeholder="পূর্ণ নাম" required autofocus>
                    @error('name')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">ইমেইল</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" placeholder="ইমেইল" required>
                    @error('email')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">পাসওয়ার্ড</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        placeholder="পাসওয়ার্ড" required>
                    @error('password')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">পাসওয়ার্ড নিশ্চিত করুন</label>
                    <input type="password" class="form-control" name="password_confirmation"
                        placeholder="পাসওয়ার্ড নিশ্চিত করুন" required>
                </div>

                <!-- Terms and Conditions -->
                <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" id="terms" required>
                    <label class="form-check-label" for="terms">
                        আমি <a href="#">শর্তাবলীর</a> সাথে একমত
                    </label>
                </div>

                <!-- Register Button -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">রেজিস্টার</button>
                </div>
            </form>

            <!-- Social Login -->
            <div class="social-auth-links text-center mb-3">
                <p>- অথবা -</p>
                <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}" class="btn btn-primary w-100 mb-2">
                    <i class="bi bi-facebook me-2"></i> Facebook দ্বারা সাইন আপ করুন
                </a>
                <a href="{{ route('social.redirect', ['provider' => 'google']) }}" class="btn btn-danger w-100">
                    <i class="bi bi-google me-2"></i> Google দ্বারা সাইন আপ করুন
                </a>
            </div>

            <div class="text-center">
                <p>ইতিমধ্যে একটি অ্যাকাউন্ট আছে? <a href="{{ route('login') }}" style="color: #006400;">লগ ইন
                        করুন</a></p>
            </div>
        </div>
    </div>
@endsection

@php
    $noFooter = true;
@endphp
