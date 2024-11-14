{{-- resources/views/career_resources/mastering_job_interviews.blade.php --}}

<x-app-layout>
    <div class="bg-white py-12 shadow-md rounded-lg">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Mastering Job Interviews</h2>
            <p class="text-gray-700 leading-relaxed mb-6">
                Interviews can be nerve-wracking, but with the right preparation, you can excel. Here’s how:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-6">
                <li><strong>Research the Company</strong>: Understand its mission, values, and recent news to show you’re genuinely interested.</li>
                <li><strong>Prepare Answers</strong>: Think about answers to common questions, like “Tell me about yourself” and “What are your strengths?”</li>
                <li><strong>Practice Body Language</strong>: Make eye contact, smile, and sit up straight to convey confidence.</li>
                <li><strong>Follow Up</strong>: Send a thank-you note within 24 hours of the interview to leave a positive impression.</li>
            </ul>
            <p class="text-gray-700 mt-4">
                By preparing well and presenting yourself professionally, you’ll make a strong impression in job interviews.
            </p>
        </div>
        <a href="{{ route('alumni.dashboard') }}" class="mt-6 inline-block text-white bg-red-600 hover:bg-red-700 rounded-md px-4 py-2" style="margin-left: 40%;">Back to Career Resources</a>
    </div>
</x-app-layout>
