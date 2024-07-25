<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="margin-left: 70%; color: white; padding-top: 6rem;">
            {{ __('Edit Job') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark-gray overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-dark-gray border-b border-dark-gray text-light-gray">
                    <form method="POST" action="{{ route('admin.update-job', $job->id) }}" style="margin-left: 62%; margin-top: 3rem; margin-bottom: -31rem;">
                        @csrf
                        <div>
                            <label for="job_title" class="block font-medium text-sm text-light-gray">{{ __('Job Title') }}</label>
                            <input id="job_title" class="block mt-1 w-full bg-input-gray text-input-gray rounded-md shadow-sm input-focus" style="margin-left: 13%; height: 30px; width: 50%;" type="text" name="title" value="{{ $job->title }}" required>
                            @if($errors->has('title'))
                                <span class="text-red-500 text-sm">{{ $errors->first('title') }}</span>
                            @endif
                        </div>

                        <div class="mt-4" style="margin-top: 2rem;">
                            <label for="job_description" class="block font-medium text-sm text-light-gray">{{ __('Job Description') }}</label>
                            <textarea id="job_description" class="block mt-1 w-full bg-input-gray text-input-gray rounded-md shadow-sm input-focus" style="margin-left: 3%; width: 50%;" name="description" rows="4" required>{{ $job->description }}</textarea>
                            @if($errors->has('description'))
                                <span class="text-red-500 text-sm">{{ $errors->first('description') }}</span>
                            @endif
                        </div>

                        <div class="mt-4" style="margin-top: 2rem;">
                            <label for="job_requirements" class="block font-medium text-sm text-light-gray" style="width: 10%;">{{ __('Job Requirements') }}</label>
                            <textarea id="job_requirements" class="block mt-1 w-full bg-input-gray text-input-gray rounded-md shadow-sm input-focus" style="width: 50%;" name="requirements" rows="4" required>{{ $job->requirements }}</textarea>
                            @if($errors->has('requirements'))
                                <span class="text-red-500 text-sm">{{ $errors->first('requirements') }}</span>
                            @endif
                        </div>

                        <div class="flex items-center justify-end mt-4" style="margin-top: 3rem; margin-left: 25%;">
                            <button type="submit" class="btn-red rounded-md shadow-sm" style="border: none; padding: 11px;">
                                {{ __('Update Job') }}
                            </button>
                        </div>
                    </form>
