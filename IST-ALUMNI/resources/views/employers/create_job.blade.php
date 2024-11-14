{{-- resources/views/employer/create-job.blade.php --}}

<x-app-layout>
    {{-- Page Header --}}
    <div class="bg-gray-100 py-6 sm:py-8 lg:py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-semibold text-gray-800">Create New Job Listing</h1>
            <p class="mt-2 text-sm text-gray-600">Fill out the form below to post a new job.</p>
        </div>
    </div>

    {{-- Job Creation Form --}}
    <div class="max-w-4xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg px-8 py-8 sm:px-10">
            <form action="{{ route('jobs.store') }}" method="POST" class="space-y-6">
                @csrf

                {{-- Job Title --}}
                <div>
                    <label for="title" class="block text-gray-700 font-medium">Job Title</label>
                    <input type="text" name="title" id="title" required 
                           class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-red-500">
                </div>

                {{-- Company Name --}}
                <div>
                    <label for="company" class="block text-gray-700 font-medium">Company Name</label>
                    <input type="text" name="company" id="company" required 
                           class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-red-500">
                </div>

                {{-- Job Description --}}
                <div>
                    <label for="description" class="block text-gray-700 font-medium">Job Description</label>
                    <textarea name="description" id="description" rows="4" required 
                              class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-red-500"></textarea>
                </div>

                {{-- Location --}}
                <div>
                    <label for="location" class="block text-gray-700 font-medium">Location</label>
                    <input type="text" name="location" id="location" placeholder="e.g., Remote" 
                           class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-red-500">
                </div>

                {{-- Job Type --}}
                <div>
                    <label for="jobType" class="block text-gray-700 font-medium">Job Type</label>
                    <select name="job_type" id="jobType" required 
                            class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-red-500">
                        <option value="Full-Time">Full-Time</option>
                        <option value="Part-Time">Part-Time</option>
                        <option value="Contract">Contract</option>
                        <option value="Temporary">Temporary</option>
                        <option value="Internship">Internship</option>
                    </select>
                </div>

                {{-- Job Expired Toggle --}}
                <div class="flex items-center">
                    <input type="checkbox" name="expired" id="expired" 
                           class="h-4 w-4 text-red-500 focus:ring-red-500 border-gray-300 rounded">
                    <label for="expired" class="ml-2 text-gray-700">Mark as Expired</label>
                </div>

                {{-- Submit Button --}}
                <div class="flex justify-end">
                    <button type="submit" 
                            class="px-6 py-2 bg-red-500 hover:bg-red-600 text-white font-medium rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Create Job
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
