<x-app-layout>
    <div class="container mx-auto py-12">
        <div class="bg-white shadow-lg rounded-lg p-8 mb-8">
            <div class="flex items-center space-x-4">
                <img src="{{ asset('storage/' . $portfolio->profile_image) }}" class="w-24 h-24 rounded-full object-cover" alt="Profile Image">
                <div>
                    <h2 class="text-4xl font-bold text-gray-700">{{ $portfolio->name }}</h2>
                    <p class="text-lg text-gray-500">{{ $portfolio->profession }}</p>
                </div>
            </div>
        </div>

        <!-- Bio Section -->
        <div class="bg-gray-50 p-6 rounded-lg mb-8 shadow-lg">
            <h3 class="text-3xl font-semibold mb-4">About Me</h3>
            <p class="text-lg text-gray-700">{{ $portfolio->bio }}</p>
        </div>

        <!-- Media Section -->
        <div class="grid grid-cols-2 gap-6 mb-10">
            <div>
                <h3 class="text-2xl font-semibold mb-2">Introduction Video</h3>
                <video controls class="w-full rounded-lg shadow-lg">
                    <source src="{{ asset('storage/' . $portfolio->intro_video) }}" type="video/mp4">
                </video>
            </div>

            <div>
                <h3 class="text-2xl font-semibold mb-2">Profile Image</h3>
                <img src="{{ asset('storage/' . $portfolio->profile_image) }}" class="w-full h-auto rounded-lg shadow-lg">
            </div>
        </div>

        <!-- Files Section -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-3xl font-bold mb-4">Attached Portfolio Files</h3>
            @if($portfolio->files)
                <ul class="list-disc pl-6">
                    @foreach($portfolio->files as $file)
                        <li class="text-lg text-blue-500">
                            <a href="{{ asset('storage/' . $file) }}" target="_blank">{{ basename($file) }}</a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-500">No files uploaded.</p>
            @endif
        </div>
    </div>
</x-app-layout>
