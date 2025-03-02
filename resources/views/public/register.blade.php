@extends('layouts.app')

@section('content')
    <div class="container register-page">
        <div class="row justify-content-center">
            <!-- Left Column: Promotional image (desktop only) -->
            <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center register-left">
                <img src="{{ asset('images/register-illustration.jpg') }}" alt="Register Illustration" class="img-fluid"
                    onerror="this.onerror=null; this.src='https://placehold.co/600x400?text=Register+Image';">
            </div>


            <!-- Right Column: Registration Form -->
            <div class="col-12 col-lg-6">
                <div class="card shadow-sm register-card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4" style="color: #006400;">
                            নতুন অ্যাকাউন্ট তৈরি করুন
                        </h4>
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <!-- Full Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">পূর্ণ নাম</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" placeholder="পূর্ণ নাম" required autofocus>
                                @error('name')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">ইমেইল</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="ইমেইল" required>
                                @error('email')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Password & Confirm Password -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label">পাসওয়ার্ড</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" placeholder="পাসওয়ার্ড" required>
                                    @error('password')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="password_confirmation" class="form-label">পাসওয়ার্ড নিশ্চিত করুন</label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                        placeholder="পাসওয়ার্ড নিশ্চিত করুন" required>
                                </div>
                            </div>
                            <!-- Terms and Conditions -->
                            <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    আমি <a href="#">শর্তাবলী</a> সাথে একমত
                                </label>
                            </div>
                            <!-- Register Button -->
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100">রেজিস্টার</button>
                            </div>
                        </form>
                        <!-- Social Login Options -->
                        <div class="text-center mb-3">
                            <p>- অথবা -</p>
                            <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}"
                                class="btn btn-primary w-100 mb-2">
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
            </div>
        </div>
    </div>

    <!-- Minimal Footer -->
    <footer class="py-3">
        <div class="container text-center">
            <p class="mb-0">© ২০২৫ মদিনা অনলাইন মাদরাসা. সকল স্বত্ব সংরক্ষিত।</p>
            <p class="mb-0">Developed by <a href="mailto:msrnayeem@gmail.com" class="text-decoration-none text-white">Msr
                    Nayeem</a></p>
        </div>
    </footer>
@endsection



@php
    $noFooter = true;
@endphp
