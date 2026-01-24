@extends('front.layouts.master')

@section('title', 'Reset Password | IYADMUN 2026')
@section('css')
<style>
    .call_to_action {
        display: none;
    }

    .footer {
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

            <h2 class="text-center fw-bold mb-2" style="color: var(--un-blue-dark);">Reset Password ?</h2>

            <form method="post" action="{{ route('front.update.forget.password') }}">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="email" value="{{ $email }}" class="form-control form-control-custom"
                        placeholder="your.email@example.com" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">New Password</label>
                    <input type="password" name="password" class="form-control form-control-custom"
                        placeholder="Enter Password" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control form-control-custom"
                        placeholder="Enter Confirm Password" required>
                </div>
                <button type="submit" class="btn btn-login">
                    Reset Password
                    <i class="fas fa-arrow-right ms-2"></i>
                </button>
            </form>

            <div class="divider">
                <span style="background: white; padding: 0 1rem; color: #888;">OR</span>
            </div>

            <div class="text-center">
                <p class="mb-0"> Login To Account <a href="{{ route('front.login') }}" class="link-custom"> Login </a>
                </p>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('front.index') }}" class="link-custom" style="font-size: 0.9rem;">
                    <i class="fas fa-arrow-left me-2"></i>
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</div>


@endsection
