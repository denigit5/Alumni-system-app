<x-guest-layout>
    <style>
        body {
            background-color: #2E2E2E; /* dark grey background */
            color: #FFFFFF; /* white text */
            font-family: Arial, sans-serif;
        }
        .form-container {
            width: 25%;
            margin: auto;
            padding: 5rem;
            padding-top: 2rem;
            margin-top: 2%;
            background-color: #3E3E3E; /* slightly lighter grey for form background */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .form-container input[type="email"] {
            width: 100%;
            padding: 0.5rem;
            margin-top: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
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
        .form-container .text-gray-600 {
            color: #D3D3D3;
        }
        .form-container .hover\:text-gray-900:hover {
            color: #D32F2F; /* dim-red color */
        }
        .form-container .focus\:ring-indigo-500:focus {
            outline: 2px solid #D32F2F; /* dim-red focus ring */
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
            color: #D32F2F; /* dim-red color */
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
        .form-container .ms-4 {
            margin-left: 1rem;
        }
        .form-container .text-sm {
            font-size: 0.875rem;
        }
        .form-container .x-primary-button {
            background-color: #D32F2F; /* dim-red button */
            color: #FFFFFF;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-container .x-primary-button:hover {
            background-color: #B71C1C;
        }
        .image {
            background-image: url('/images/ssss.png');
            background-size: cover;
            background-position: center;
            margin-left: 43%;
            margin-top: 2rem;
            margin-bottom: 1.5rem;
            width: 12%;
            height: 100px;
        }
    </style>

    <div class="image"></div>

    <div class="form-container">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="x-primary-button">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
