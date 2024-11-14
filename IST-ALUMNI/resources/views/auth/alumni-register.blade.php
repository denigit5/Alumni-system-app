<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            background-color: #f8f8f8; 
            color: darkslategray;
            font-family: Arial, sans-serif;
            overflow-y: hidden;
        }
        /* Preloader Styles */
#preloader {
    position: fixed;
    width: 100%;
    height: 100%;
    background: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.spinner {
    border: 4px solid rgba(0, 0, 0, 0.1);
    border-left-color: #D32F2F;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    to {
        transform: rotate(360deg);
    }
}

/* Hide form until the page is loaded */
.form-container {
    display: none;
}

        .form-container {
            width: 25%;
            height: 600px;
            margin: auto;
            padding: 5rem;
            padding-top: 1.5rem;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"],
        .form-container select {
            background-color: rgb(232, 244, 248);
            width: 100%;
            padding: 0.4rem;
            margin-top: 1rem;
            border: 0.1px solid rgb(213, 222, 224);
            border-radius: 4px;
        }
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"],
        .form-container select:focus {
            outline: none;
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
            outline: 2px solid #D32F2F; /* dime-red focus ring */
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
            margin-left: 1rem;
        }
        .form-container .x-primary-button:hover {
            background-color: #B71C1C;
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
<div id="preloader">
    <div class="spinner"></div>
</div>
    <div class="form-container">
        <form method="POST" action="{{ route('alumni-register') }}">
            <h2 style="text-align: center; color:#f04037;">Alumni Register</h2>
            @csrf

            <!-- Name -->
            <div>
                <label for="name">{{ __('Name') }}</label>
                <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4">
                <label for="graduation_year">{{ __('Graduation year') }}</label>
                <input id="graduation_year" type="text" name="graduation_year" value="{{ old('graduation_year') }}" required>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password">
                @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('alumni-login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button type="submit" class="x-primary-button ms-4">
                    {{ __('Register') }}
                </button>
            </div>
            <div class="image"></div>
        </form>
    </div>
    <script>
    window.addEventListener('load', function () {
        // Hide preloader and show the form
        const preloader = document.getElementById('preloader');
        const formContainer = document.querySelector('.form-container');
        
        preloader.style.display = 'none';
        formContainer.style.display = 'block';
    });
    </script>

</body>
</html>
