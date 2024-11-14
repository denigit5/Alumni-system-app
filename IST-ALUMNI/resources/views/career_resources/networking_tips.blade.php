{{-- resources/views/career_resources/networking_tips_for_job_seekers.blade.php --}}

<x-app-layout>
    <div class="bg-white py-12">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Networking Tips for Job Seekers</h2>
            <p class="text-gray-700 leading-relaxed mb-6">
                Networking can open doors to opportunities. Here’s how to network effectively:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-6">
                <li><strong>Attend Industry Events</strong>: Meet people in your field by attending conferences, workshops, and webinars.</li>
                <li><strong>Use LinkedIn</strong>: Reach out to professionals and join relevant groups. Personalize your messages when connecting.</li>
                <li><strong>Follow Up</strong>: After meeting someone, send a thank-you message and stay connected.</li>
                <li><strong>Help Others</strong>: Networking is about mutual benefit, so offer help or share insights when you can.</li>
            </ul>
            <p class="text-gray-700 mt-4">
                Effective networking can lead to job referrals, mentorship, and valuable industry insights.
            </p>
        </div>
        <a href="{{ route('alumni.dashboard') }}" class="mt-6 inline-block text-white bg-red-600 hover:bg-red-700 rounded-md px-4 py-2" style="margin-left: 40%;">Back to Career Resources</a>
    </div>
</x-app-layout>
