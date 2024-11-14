<!-- Portfolio Creation Template with Live Preview -->
<x-app-layout>
    <div class="container mx-auto py-12">
        <!-- Hero Section -->
        <div class="hero bg-gradient-to-r from-red-400 to-gray-400 text-white text-center py-16 mb-10 shadow-xl">
            <h1 class="text-6xl font-extrabold mb-4">Craft Your Unique Portfolio</h1>
            <p class="text-lg">Showcase your story, experience, and skills to the world. Make it count!</p>
        </div>

        <!-- Portfolio Creation Section -->
        <div class="flex flex-wrap justify-between">
            <!-- Form Section -->
            <div class="w-full lg:w-1/2 bg-white shadow-lg rounded-lg p-10">
                <h2 class="text-4xl font-semibold mb-6 text-gray-700 text-center">Create Your Portfolio</h2>

                <!-- Form -->
                <form id="portfolio-form" method="POST" action="{{ route('portfolio.store') }}" enctype="multipart/form-data" class="space-y-8">
                    @csrf

                    <!-- Full Name -->
                    <div class="space-y-2">
                        <label class="block text-xl font-medium">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name" class="w-full border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-red-400 focus:outline-none" required>
                    </div>

                    <!-- Profession -->
                    <div class="space-y-2">
                        <label class="block text-xl font-medium">Profession</label>
                        <input type="text" id="profession" name="profession" placeholder="E.g. Web Developer, Graphic Designer" class="w-full border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-red-400 focus:outline-none" required>
                    </div>

                    <!-- Bio -->
                    <div class="space-y-2">
                        <label class="block text-xl font-medium">Bio</label>
                        <textarea id="bio" name="bio" rows="5" placeholder="Tell something about yourself..." class="w-full border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-red-400 focus:outline-none"></textarea>
                    </div>

                    <!-- Profile Image Upload -->
                    <div class="space-y-2">
                        <label class="block text-xl font-medium">Upload Profile Image</label>
                        <input type="file" id="profile_image" name="profile_image" accept="image/*" class="w-full border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-red-400 focus:outline-none" required>
                    </div>

                    <!-- Video Upload -->
                    <div class="space-y-2">
                        <label class="block text-xl font-medium">Upload Intro Video</label>
                        <input type="file" id="intro_video" name="intro_video" accept="video/*" class="w-full border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-red-400 focus:outline-none">
                    </div>

                    <!-- Portfolio Files (PDF, DOCX) -->
                    <div class="space-y-2">
                        <label class="block text-xl font-medium">Upload Portfolio Files</label>
                        <input type="file" id="portfolio_files" name="portfolio_files[]" accept=".pdf,.docx" class="w-full border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-red-400 focus:outline-none" multiple>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="bg-red-500 text-white py-3 px-10 rounded-full shadow-lg hover:bg-red-600 transition-all duration-300">
                            Save Portfolio
                        </button>
                    </div>
                </form>
            </div>

            <!-- Live Preview Section -->
            <div class="w-full lg:w-1/2 bg-gray-50 shadow-lg rounded-lg p-10 relative overflow-hidden">
                <h3 class="text-3xl font-semibold mb-4 text-gray-600 text-center">Live Preview</h3>

                <!-- Live Preview Content -->
                <div id="preview-container" class="space-y-6">
                    <!-- Profile Image Preview -->
                    <div id="profile-image-preview" class="w-32 h-32 rounded-full mx-auto bg-gray-200 flex items-center justify-center text-gray-400">No Image</div>

                    <!-- Full Name and Profession Preview -->
                    <div class="text-center">
                        <h4 id="preview-name" class="text-3xl font-bold text-gray-700">Your Name</h4>
                        <p id="preview-profession" class="text-lg text-gray-500">Your Profession</p>
                    </div>

                    <!-- Bio Preview -->
                    <div id="preview-bio" class="text-gray-600 text-center">Your bio will appear here...</div>

                    <!-- Intro Video Preview -->
                    <div id="video-preview" class="w-full h-auto bg-gray-100 p-2 rounded-lg flex justify-center items-center text-gray-400">No Video</div>
                </div>

                <!-- Animations for preview -->
                <div class="absolute -bottom-10 -left-10 w-48 h-48 bg-red-300 opacity-50 rounded-full animate-pulse"></div>
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-red-200 opacity-50 rounded-full animate-ping"></div>
            </div>
        </div>
        @if (session('success'))
           <div class="bg-green-500 text-white p-4 rounded-md">
              {{ session('success') }}
             <a href="{{ session('portfolio-view') }}" class="underline text-white ml-4">View your portfolio</a>
            </div>
        @endif

    </div>

    <script>
        // Live preview JavaScript
        document.getElementById('name').addEventListener('input', function() {
            document.getElementById('preview-name').textContent = this.value || 'Your Name';
        });

        document.getElementById('profession').addEventListener('input', function() {
            document.getElementById('preview-profession').textContent = this.value || 'Your Profession';
        });

        document.getElementById('bio').addEventListener('input', function() {
            document.getElementById('preview-bio').textContent = this.value || 'Your bio will appear here...';
        });

        document.getElementById('profile_image').addEventListener('change', function(event) {
            let reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profile-image-preview').innerHTML = `<img src="${e.target.result}" class="w-full h-full rounded-full object-cover" alt="Profile Image">`;
            };
            reader.readAsDataURL(event.target.files[0]);
        });

        document.getElementById('intro_video').addEventListener('change', function(event) {
            let file = event.target.files[0];
            let videoPreview = document.getElementById('video-preview');
            if (file) {
                let url = URL.createObjectURL(file);
                videoPreview.innerHTML = `<video controls class="w-full h-auto"><source src="${url}" type="video/mp4">Your browser does not support the video tag.</video>`;
            } else {
                videoPreview.textContent = 'No Video';
            }
        });
    </script>
</x-app-layout>
