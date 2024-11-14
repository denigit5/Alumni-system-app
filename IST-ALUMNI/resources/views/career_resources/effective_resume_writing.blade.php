{{-- resources/views/career_resources/effective_resume_writing.blade.php --}}

<x-app-layout>
    <div class="bg-white py-12">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Effective Resume Writing</h2>
            <p class="text-gray-700 leading-relaxed mb-6">
                An effective resume captures attention and communicates your strengths. Here are some essentials:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-6">
                <li><strong>Keep it Clear and Concise</strong>: Limit your resume to one page, focusing on relevant experience and accomplishments.</li>
                <li><strong>Use Bullet Points</strong>: Highlight key achievements and responsibilities using action verbs.</li>
                <li><strong>Quantify Achievements</strong>: Include measurable results where possible, like “Increased sales by 30%.”</li>
                <li><strong>Customize for Each Application</strong>: Tailor your resume for each role to emphasize the most relevant skills.</li>
            </ul>
            <p class="text-gray-700 mt-4">
                By following these tips, your resume can become a tool that presents your professional value clearly and effectively.
            </p>
        </div>
        <a href="{{ route('alumni.dashboard') }}" class="mt-6 inline-block text-white bg-red-600 hover:bg-red-700 rounded-md px-4 py-2" style="margin-left: 40%;">Back to Career Resources</a>
    </div>
</x-app-layout>
