{{-- resources/views/career_resources/mentorship_programs.blade.php --}}

<x-app-layout>
    <div class="bg-white py-12 shadow-md rounded-lg">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Mentorship Programs</h2>
            <p class="text-gray-700 leading-relaxed mb-6">
                Mentorship programs offer a valuable opportunity to connect with experienced professionals who can guide your career. Through mentorship, you can gain:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-6">
                <li>Personalized career advice</li>
                <li>Guidance on specific skills and industries</li>
                <li>Expanded professional networks</li>
            </ul>
            <p class="text-gray-700 mt-4">
                Explore available mentorship programs and start building meaningful connections that can propel your career forward.
            </p>
        </div>
        <a href="{{ route('alumni.dashboard') }}" class="mt-6 inline-block text-white bg-red-600 hover:bg-red-700 rounded-md px-4 py-2" style="margin-left: 40%;">Back to Career Resources</a>
    </div>
</x-app-layout>
