{{-- resources/views/career_resources/alumni_success_stories.blade.php --}}

<x-app-layout>
    <div class="bg-white py-12 shadow-md rounded-lg">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Alumni Success Stories</h2>
            <p class="text-gray-700 leading-relaxed mb-6">
                Get inspired by alumni who have carved successful career paths. These stories can offer valuable insights into:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-6">
                <li>Overcoming career challenges</li>
                <li>Transitioning into new industries</li>
                <li>Building professional skills</li>
            </ul>
            <p class="text-gray-700 mt-4">
                Each journey provides a unique perspective and may inspire your own career path forward.
            </p>
        </div>
        <a href="{{ route('alumni.dashboard') }}" class="mt-6 inline-block text-white bg-red-600 hover:bg-red-700 rounded-md px-4 py-2" style="margin-left: 40%;">Back to Career Resources</a>
    </div>
</x-app-layout>
