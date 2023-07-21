@extends('layouts.main')
@section('container')
<div class="min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full bg-white p-8 shadow-md rounded-lg">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Verify Your Email Address</h1>

        @if (session('resent'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                A fresh verification link has been sent to your email address.
            </div>
        @endif

        <p class="text-gray-600 mb-4">
            Before proceeding, please check your email for a verification link.
            If you did not receive the email, 
        </p>

        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf

            <div>
                <button type="submit" class="text-sm text-blue-500 hover:text-blue-700">
                    Click here to send email
                </button>
            </div>
        </form>
    </div>
</div>
@endsection