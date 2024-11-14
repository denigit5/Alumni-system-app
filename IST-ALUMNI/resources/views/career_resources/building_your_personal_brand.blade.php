{{-- resources/views/career_resources/building_your_personal_brand.blade.php --}}

<x-app-layout>
    <div class="bg-white py-12">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Building Your Personal Brand</h2>
            <p class="text-gray-700 leading-relaxed mb-6">
                A personal brand can make you stand out in a crowded job market. Here’s how to build one:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-6">
                <li><strong>Identify Your Strengths</strong>: Think about what makes you unique and the skills you bring to the table.</li>
                <li><strong>Be Consistent</strong>: Keep your message and tone consistent across your resume, LinkedIn, and other professional platforms.</li>
                <li><strong>Create Content</strong>: Share insights or write articles related to your field to establish yourself as a knowledgeable professional.</li>
                <li><strong>Engage with Others</strong>: Comment on posts, join discussions, and support others in your network.</li>
            </ul>
            <p class="text-gray-700 mt-4">
                Your personal brand is a reflection of who you are professionally, and it can help you attract the right career opportunities.
            </p>
        </div>
        <a href="{{ route('alumni.dashboard') }}" class="mt-6 inline-block text-white bg-red-600 hover:bg-red-700 rounded-md px-4 py-2" style="margin-left: 40%;">Back to Career Resources</a>
    </div>
</x-app-layout>
