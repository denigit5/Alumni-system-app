<!-- resources/views/admin/post_jobs.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="margin-left: 70%; color: white; padding-top: 6rem;">
            {{ __('Post Jobs') }}
        </h2>
    </x-slot>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #2E2E2E;
        }
        .text-light-gray {
            color: #D3D3D3;
        }
        .border-light-gray {
            border-color: #3E3E3E;
        }
        .bg-input-gray {
            background-color: #EFEFEF;
            border: none;
        }
        .text-input-gray {
            color: #2E2E2E;
        }
        .btn-red {
            background-color: #D32F2F;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn-red:hover {
            background-color: #B71C1C;
            transform: scale(1.05);
        }
        .input-focus:focus {
            border-color: #D32F2F;
            box-shadow: 0 0 5px #D32F2F;
        }
        .card {
            background-color: #3E3E3E;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(211, 47, 47, 0.5);
            transition: transform 0.3s, box-shadow 0.3s;
            width: 48%;
            margin: 1%;
            height: 150px;
            overflow: hidden;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(211, 47, 47, 0.7);
        }
        .header-title {
            color: #D32F2F;
            font-size: 30px;
            margin-bottom: 1rem;
            margin-left: 10%;
        }
        .job-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark-gray overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-dark-gray border-b border-dark-gray text-light-gray">
                   <div>
                     <form method="POST" action="#" style="margin-left: 62%; margin-top: 3rem; margin-bottom: -31rem;">
                        @csrf
                        <div>
                            <label for="job_title" class="block font-medium text-sm text-light-gray">{{ __('Job Title') }}</label>
                            <input id="job_title" class="block mt-1 w-full bg-input-gray text-input-gray rounded-md shadow-sm input-focus" style="margin-left: 13%; height: 30px; width: 50%;" type="text" name="job_title" required>
                            @if($errors->has('job_title'))
                                <span class="text-red-500 text-sm">{{ $errors->first('job_title') }}</span>
                            @endif
                        </div>

                        <div class="mt-4" style="margin-top: 2rem;">
                            <label for="job_description" class="block font-medium text-sm text-light-gray">{{ __('Job Description') }}</label>
                            <textarea id="job_description" class="block mt-1 w-full bg-input-gray text-input-gray rounded-md shadow-sm input-focus" style="margin-left: 3%; width: 50%;" name="job_description" rows="4" required></textarea>
                            @if($errors->has('job_description'))
                                <span class="text-red-500 text-sm">{{ $errors->first('job_description') }}</span>
                            @endif
                        </div>

                        <div class="mt-4" style="margin-top: 2rem;">
                            <label for="job_requirements" class="block font-medium text-sm text-light-gray" style="width: 10%;">{{ __('Job Requirements') }}</label>
                            <textarea id="job_requirements" class="block mt-1 w-full bg-input-gray text-input-gray rounded-md shadow-sm input-focus" style="width: 50%;" name="job_requirements" rows="4" required></textarea>
                            @if($errors->has('job_requirements'))
                                <span class="text-red-500 text-sm">{{ $errors->first('job_requirements') }}</span>
                            @endif
                        </div>

                        <div class="flex items-center justify-end mt-4" style="margin-top: 3rem; margin-left: 25%;">
                            <button type="submit" class="btn-red rounded-md shadow-sm" style="border: none; padding: 11px;">
                                {{ __('Post Job') }}
                            </button>
                        </div>
                    </form>
                   </div>

                    <div class="mt-8" style="margin-left: 2rem;">
                        <h3 class="text-lg font-semibold text-light-gray header-title">{{ __('Available Software Jobs') }}</h3>
                        <div class="job-list">
                            @foreach($jobs as $job)
                                <div class="card">
                                    <h4 class="text-xl text-red-500">{{ $job['title'] }}</h4>
                                    <p class="text-sm text-light-gray">{{ $job['description'] }}</p>
                                    <p class="text-sm text-light-gray"><strong>Requirements:</strong> {{ $job['requirements'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script>
        function deleteJob(jobId) {
            // Implement your delete logic here
            alert('Deleting job with ID ' + jobId);
            // You can use AJAX to send a request to delete the job from the database
        }
    </script>
</x-app-layout>
