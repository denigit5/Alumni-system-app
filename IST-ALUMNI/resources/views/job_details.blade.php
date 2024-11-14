<x-app-layout>
    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold text-red-500">{{ $job->title }}</h1>
        <p class="text-lg text-gray-700 mb-4">{{ $job->company }} - {{ $job->location }}</p>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Job Description</h2>
            <p class="text-gray-600">{{ $job->description }}</p>

            <h3 class="text-xl font-bold mt-6">Skills Required:</h3>
            <ul class="list-disc list-inside text-gray-600">
                @foreach (explode(',', $job->skills) as $skill)
                    <li>{{ $skill }}</li>
                @endforeach
            </ul>

            <div class="mt-8">
                <a href="{{ route('jobs.apply', $job->id) }}" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition-colors">Apply for this Job</a>
            </div>
        </div>
    </div>
</x-app-layout>
