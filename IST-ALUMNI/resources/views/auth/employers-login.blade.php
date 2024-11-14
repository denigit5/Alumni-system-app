<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: #f8f8f8;
            color: darkslategrey; 
            font-family: Arial, sans-serif;
            overflow-y: hidden;
        }
        .form-container {
            max-width: 60%;
            margin: auto;
            padding: 4rem;
            margin-top: 2%;
            width: 400px;
            height: 450px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 80%;
            padding: 0.4rem;
            margin-top: 1rem;
            border: 1px solid #ccc;
        }
        .form-container input[type="checkbox"] {
            margin-right: 0.5rem;
        }
        .form-container label {
            margin-bottom: 0.5rem;
            display: block;
        }
        .form-container .mt-4 {
            margin-top: 1rem;
        }
        .form-container .block {
            display: block;
        }
        .form-container .underline {
            text-decoration: underline;
        }
        .form-container  {
            color: #D3D3D3;
        }
        .form-container .hover\:text-gray-900:hover {
            color: #D32F2F; /* dime-red color */
        }
        .form-container .focus\:ring-indigo-500:focus {
            outline: 2px solid #D32F2F; /* dime-red focus ring */
            outline-offset: 2px;
        }
        .form-container .focus\:ring-offset-2:focus {
            outline-offset: 2px;
        }
        .form-container .rounded-md {
            border-radius: 4px;
        }
        .form-container .rounded {
            border-radius: 4px;
        }
        .form-container .text-indigo-600 {
            color: #D32F2F; /* dime-red color */
        }
        .form-container .shadow-sm {
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }
        .form-container .ms-2 {
            margin-left: 0.5rem;
        }
        .form-container .ms-3 {
            margin-left: 0.75rem;
        }
        .form-container .text-sm {
            font-size: 0.875rem;
        }
        .form-container .x-primary-button {
            background-color: #D32F2F; /* dime-red button */
            color: #FFFFFF;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 0.75rem;
        }
        .form-container .x-primary-button:hover {
            background-color: #B71C1C;
        }

        .form-container .register-button {
            background-color: #FFFFFF; /* white button */
            color: #D32F2F; /* dime-red text */
            padding: 0.5rem 1rem;
            border: 2px solid #D32F2F; /* dime-red border */
            border-radius: 4px;
            cursor: pointer;
            margin-left: 0.75rem;
            margin-top: 1rem;
        }
        .form-container .register-button:hover {
            background-color: #D32F2F;
            color: #FFFFFF;
        }

        .form-container .message {
            text-align: center;
            margin-top: 2rem;
        }
        .message {
            margin-left: -7rem;
        }
        .image {
            background-image: url('/images/ssss.png');
            background-size: cover;
            background-position: center;
            margin-left: 30%;
            margin-top: 1rem;
            width: 30%;
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('employers-login') }}">
            <h2 style="text-align: center; color:#f04037;">Employer login</h2>
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label style="color: darkslategrey;" for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label style="color: darkslategrey;" for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span style="color: darkslategrey;" class="ms-2 text-sm">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button type="submit" class="x-primary-button ms-3">
                    {{ __('Log in') }}
                </button>
            </div>

            <div class="message">
                <p style="color: darkslategrey;">Don't have an account? <a href="{{ route('employers-register') }}" class="underline hover:text-gray-900">Create one here</a></p>
            </div>

            <div class="flex items-center justify-end">
                <a href="{{ route('employers-register') }}" class="register-button">Register</a>
            </div>
            
            <div class="image"></div>
        </form>
    </div>
</body>
</html>
