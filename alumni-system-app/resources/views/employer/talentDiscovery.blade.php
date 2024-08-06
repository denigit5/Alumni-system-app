<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight text-blue-600">
            {{ __('Talent Discovery: Find the Best Talent') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-xl font-bold mb-4">Discover Alumni Talent</h3>
                    <p class="text-gray-600 mb-6">
                        Browse through our alumni portfolios and projects to find the best candidates for your organization.
                    </p>
                    
                    <!-- Search Bar -->
                    <div class="mb-6">
                        <input type="text" placeholder="Search for talent, skills, or projects..." class="p-3 w-full border border-gray-300 rounded-lg">
                    </div>

                    <!-- Alumni Profiles -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($alumni as $alumnus)
                        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                            <!-- <div class="mb-4">
                                <img src="{{ $alumni->profile_image }}" alt="{{ $alumni->name }}" class="w-full h-32 object-cover rounded-lg">
                            </div> -->
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">{{ $alumni->name }}</h4>
                            <p class="text-gray-700 mb-4">{{ $alumni->skills }}</p>
                            <a href="{{ route('employer.alumnuProfile', $alumni->id) }}" class="text-blue-600 hover:underline">View Profile</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="bg-gray-100 text-center p-4 rounded-lg shadow-md mt-6">
                <p class="text-gray-600">&copy; 2024 Your Company. All rights reserved.</p>
            </footer>
        </div>
    </div>
</x-app-layout>
<style>
    /* Employer Dashboard Custom Styles */
body {
    font-family: 'Nunito', sans-serif;
    background-color: #f4f5f7;
}

h2 {
    color: #1c3d5a;
}

.bg-white {
    background-color: #ffffff;
}

.text-gray-600 {
    color: #718096;
}

.text-gray-700 {
    color: #4a5568;
}

.text-gray-900 {
    color: #1a202c;
}

.text-blue-600 {
    color: #3182ce;
}

.hover\:underline:hover {
    text-decoration: underline;
}

.shadow-md {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.shadow-lg {
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}

.rounded-lg {
    border-radius: 0.5rem;
}

.p-4 {
    padding: 1rem;
}

.p-6 {
    padding: 1.5rem;
}

.mb-2 {
    margin-bottom: 0.5rem;
}

.mb-4 {
    margin-bottom: 1rem;
}

.mb-6 {
    margin-bottom: 1.5rem;
}

.grid {
    display: grid;
}

.grid-cols-1 {
    grid-template-columns: repeat(1, minmax(0, 1fr));
}

.grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
}

.grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
}

.gap-6 {
    gap: 1.5rem;
}

.w-full {
    width: 100%;
}

.h-32 {
    height: 8rem;
}

.object-cover {
    object-fit: cover;
}

.transition-shadow {
    transition: box-shadow 0.3s ease;
}

.text-center {
    text-align: center;
}

.rounded-lg {
    border-radius: 0.5rem;
}

.bg-gray-100 {
    background-color: #f7fafc;
}

.bg-gray-200 {
    background-color: #edf2f7;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}

.border {
    border-width: 1px;
}

.border-gray-200 {
    border-color: #edf2f7;
}

.border-gray-300 {
    border-color: #e2e8f0;
}

.hover\:shadow-lg:hover {
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}

.text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem;
}

.font-semibold {
    font-weight: 600;
}

.font-bold {
    font-weight: 700;
}

.hover\:text-blue-300:hover {
    color: #63b3ed;
}

.btn {
    display: inline-block;
    font-weight: 500;
    color: #ffffff;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.375rem;
}

.bg-blue-600 {
    background-color: #3182ce;
}

.hover\:bg-blue-700:hover {
    background-color: #2b6cb0;
}

.bg-green-600 {
    background-color: #38a169;
}

.hover\:bg-green-700:hover {
    background-color: #2f855a;
}

</style>