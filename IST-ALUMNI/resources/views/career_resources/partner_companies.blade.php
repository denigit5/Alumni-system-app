{{-- resources/views/career_resources/partner_companies.blade.php --}}

<x-app-layout>
    <div class="bg-white py-12 shadow-md rounded-lg">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Partner Companies</h2>
            <p class="text-gray-700 leading-relaxed mb-6">
                Our partner companies are looking for talented professionals to join their teams. Here, you can:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-6">
                <li>Browse job openings and internships</li>
                <li>Learn more about company cultures</li>
                <li>Connect directly with recruiters</li>
            </ul>
            <p class="text-gray-700 mt-4">
                Explore these opportunities and find your fit with a company that aligns with your values and career goals.
            </p>
        </div>
        <a href="{{ route('alumni.dashboard') }}" class="mt-6 inline-block text-white bg-red-600 hover:bg-red-700 rounded-md px-4 py-2" style="margin-left: 40%;">Back to Career Resources</a>
    </div>
</x-app-layout>
