<x-app-layout>
    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold text-center mb-6 text-red-500">Apply for {{ $job->title }}</h1>
        <p class="text-center text-gray-600 mb-8">Take a step toward your dream job by submitting your details below. We're excited to see what you bring!</p>

        <form action="{{ route('jobs.submit', $job->id) }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto bg-gray-50 p-8 rounded-lg shadow-md">
            @csrf

            <div class="mb-6">
                <label for="name" class="block text-lg font-semibold text-gray-700 mb-2">Your Full Name</label>
                <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-400 focus:outline-none" placeholder="John Doe" required>
            </div>

            <div class="mb-6">
                <label for="email" class="block text-lg font-semibold text-gray-700 mb-2">Email Address</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-400 focus:outline-none" placeholder="you@example.com" required>
            </div>

            <div class="mb-6">
                <label for="resume" class="block text-lg font-semibold text-gray-700 mb-2">Upload Your Resume</label>
                <input type="file" id="resume" name="resume" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-400 focus:outline-none" required>
                <p class="text-sm text-gray-500 mt-2">Accepted formats: PDF, DOC, DOCX (Max size: 2MB)</p>
            </div>

            <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white font-semibold rounded-lg px-6 py-3 transition duration-300">Submit Application</button>
        </form>
    </div>
</x-app-layout>