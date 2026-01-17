@extends('front.layouts.master')

@section('title', 'Login | IYMUN 2026')
@section('css')
<style>
    .call_to_action {
        display: none;
    }
    .footer{
        display: none;
    }
</style>
@endsection

@section('content')
<div class="login_page">
<div class="login-container">
    <div class="login-card">
        <div class="logo-circle">
            <i class="fas fa-globe-americas"></i>
        </div>

        <h2 class="text-center fw-bold mb-2" style="color: var(--un-blue-dark);">Welcome Back!</h2>
        <p class="text-center text-muted mb-4">Sign in to access your IYMUN dashboard</p>

        <form id="loginForm">
            <div class="mb-3">
                <label class="form-label fw-bold">Email Address</label>
                <input type="email" class="form-control form-control-custom" placeholder="your.email@example.com"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Password</label>
                <input type="password" class="form-control form-control-custom" placeholder="Enter your password"
                    required>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember">
                    <label class="form-check-label" for="remember">
                        Remember me
                    </label>
                </div>
                <a href="#" class="link-custom" style="font-size: 0.9rem;">Forgot Password?</a>
            </div>

            <button type="submit" class="btn btn-login">
                Sign In
                <i class="fas fa-arrow-right ms-2"></i>
            </button>
        </form>

        <div class="divider">
            <span style="background: white; padding: 0 1rem; color: #888;">OR</span>
        </div>

        <div class="text-center">
            <p class="mb-0">Don't have an account? <a href="registration.html" class="link-custom">Register Now</a></p>
        </div>

        <div class="text-center mt-4">
            <a href="index.html" class="link-custom" style="font-size: 0.9rem;">
                <i class="fas fa-arrow-left me-2"></i>
                Back to Home
            </a>
        </div>
    </div>
</div>
</div>


@endsection
