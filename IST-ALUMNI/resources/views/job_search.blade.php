<x-app-layout>
    <div class="container mx-auto py-12">
        <h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif" class="text-4xl font-bold text-center mb-6 text-red-500">Job Search</h1>
        <p class="text-lg text-center mb-8">Find job opportunities tailored to your skills and interests.</p>
        
        <!-- Job Listing Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($jobs as $job)
            <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-2xl font-bold text-red-500">{{ $job->title }}</h2>
                <p class="text-gray-700 mb-2">{{ $job->company }} - {{ $job->location }}</p>
                <p class="text-sm text-gray-600 mb-4">{{ Str::limit($job->description, 100) }}</p>

                <!-- Apply and View Details buttons -->
                <div class="flex justify-between items-center mt-4">
                    <a href="{{ route('job_details', $job->id) }}" class="text-green-600 hover:text-red-700">View Details</a>
                    <a href="{{ route('jobs_apply', $job->id) }}" class="bg-gray-200 text-gray-600 px-4 py-2 hover:bg-gray-300 transition-colors">Apply Now</a>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Pagination (if needed) -->
        <div class="mt-8">
            {{ $jobs->links() }}
        </div>
    </div>
</x-app-layout>
