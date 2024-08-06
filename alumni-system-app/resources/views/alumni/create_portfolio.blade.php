<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight text-red-600 animate-pulse">
            {{ __('Create Portfolio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg motion-safe:animate-fadeIn">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="image"></div>
                    <div class="intro-text mb-8 text-center text-gray-800">
                        <h3 style="font-size: 24px; color: #f80108; text-align:center;" class="text-3xl font-semibold mb-4">Welcome to Your Portfolio Creation</h3>
                    </div>
                    <p style="font-size: 2rem; width: 20%; line-height: 3rem; margin-top: 10%; margin-left: 3%; margin-bottom: -17rem;" class="text-lg">Let's get started! Fill out the form to showcase your achievements.</p>
                    <form action="{{ route('alumni.storePortfolio') }}" method="POST" class="grid grid-cols-2 gap-8">
                        @csrf
                        <div class="form-group col-span-2">
                            <label style="font-size: 20px; margin-bottom: 1rem;" for="basic_info" >Basic Information:</label>
                            <input style="margin-top: 12px;" type="text" id="basic_info" name="basic_info" class="input-field" style="height: 100px;">
                        </div>
                        <div class="form-group">
                            <label style="font-size: 20px;" for="education" class="block text-lg font-medium text-gray-700">Education:</label>
                            <input style="margin-top: 12px;" type="text" id="education" name="education" class="input-field">
                        </div>
                        <div class="form-group">
                            <label style="font-size: 20px;" for="work_experience" class="block text-lg font-medium text-gray-700">Work Experience:</label>
                            <input style="margin-top: 12px;" type="text" id="work_experience" name="work_experience" class="input-field">
                        </div>
                        <div class="form-group col-span-2">
                            <label style="font-size: 20px;" for="skills" class="block text-lg font-medium text-gray-700">Skills:</label>
                            <input style="margin-top: 12px;" type="text" id="skills" name="skills" class="input-field">
                        </div>
                        <div class="col-span-2 text-center">
                            <button type="submit" class="btn-submit">Create Portfolio</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background-size: cover;
            background-position-x: -1%;
            background-color: white;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .intro-text {
            max-width: 70%;
            margin: 0 auto;
        }
        .image{
            width: 20%;
            height: 150px;
            margin-bottom: -6rem;
            margin-top: -4%;
            background-image: url("{{ asset('images/ssss.png') }}");
            background-repeat: no-repeat;
            transform: scale(0.6, 0.6);
        }
        form {
            background-color: #ebebeb;
            margin-left: 26%;
            padding: 10rem;
            height: 70vh; 
            width: 40%;/* 70% of viewport height */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 2rem;
        }
        .animate-pulse {
            animation: pulse 2.2s infinite;
        }

        .motion-safe\:animate-fadeIn {
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.5;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .input-field {
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.1);
            padding: 1rem;
            width: 100%;
            height: 60px;
            font-size: 1.5rem;
            border: none;
            transition: border-color 0.3s ease;
        }
        .input-field:focus {
            outline: none;
            border-color: #3182ce;
        }
        .btn-submit {
            padding: 1rem 2rem;
            background-color: #3182ce;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-submit:hover {
            background-color: #2c5282;
        }
    </style>
</x-app-layout>
