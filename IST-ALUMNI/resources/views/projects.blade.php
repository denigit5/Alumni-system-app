<x-app-layout>
    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold text-center mb-6 text-red-600" style="font-family:Georgia, 'Times New Roman', Times, serif">
            Publish Your Projects
        </h1>
        <p class="text-lg text-center mb-8 text-gray-500">Highlight your key projects for prospective employers to view.</p>
        
        <!-- Flex Container for Form and Preview Section -->
        <div class="flex flex-col md:flex-row gap-8 justify-center items-start">
            <!-- Project Upload Form -->
            <div class="bg-gray-100 p-8 rounded-lg shadow-lg md:w-1/2 w-full">
                <form id="projectForm" action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Project Title -->
                    <div class="mb-6">
                        <label for="title" class="block mb-2 text-gray-700 font-semibold">Project Title</label>
                        <input type="text" name="title" id="title" class="w-full px-4 py-2 rounded-lg border-gray-300 focus:ring-2 focus:ring-red-400 transition-transform duration-300 transform hover:scale-105" placeholder="Enter the project title" required>
                    </div>

                    <!-- Project Description -->
                    <div class="mb-6">
                        <label for="description" class="block mb-2 text-gray-700 font-semibold">Project Description</label>
                        <textarea name="description" id="description" class="w-full px-4 py-2 rounded-lg border-gray-300 focus:ring-2 focus:ring-red-400 transition-transform duration-300 transform hover:scale-105" rows="5" placeholder="Describe your project..." required></textarea>
                    </div>

                    <!-- Upload Project Files or GitHub Links -->
                    <div class="mb-6">
                        <label for="project_files" class="block mb-2 text-gray-700 font-semibold">Upload Project Files or Provide GitHub Links</label>

                        <!-- File Upload -->
                        <input type="file" name="project_files[]" id="project_files" multiple class="w-full px-4 py-2 rounded-lg border-gray-300 focus:ring-2 focus:ring-red-400 transition-transform duration-300 transform hover:scale-105" accept="image/*, .pdf, .docx">

                        <!-- GitHub Link Input -->
                        <div class="mt-4">
                            <label for="github_link" class="block mb-2 text-gray-700 font-semibold">GitHub Repository Link</label>
                            <input type="url" name="github_link" id="github_link" class="w-full px-4 py-2 rounded-lg border-gray-300 focus:ring-2 focus:ring-red-400 transition-transform duration-300 transform hover:scale-105" placeholder="Enter your GitHub repository URL">
                            <small class="text-gray-500">You can also provide a GitHub link if you have a public repository for your project.</small>
                        </div>

                        <small class="text-gray-500">Upload images, PDFs, or documents (Max size: 10MB each)</small>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="bg-red-500 text-white font-bold px-6 py-3 rounded-lg hover:bg-red-600 transition-colors transform hover:scale-110 focus:outline-none focus:ring-4 focus:ring-red-300">
                            Submit Project
                        </button>
                    </div>
                </form>
            </div>

            <!-- Project Preview Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg md:w-1/2 w-full">
                <h2 class="text-3xl font-semibold text-center mb-6 text-gray-700">Preview Your Project</h2>
                <div class="flex flex-col items-center space-y-4">
                    <!-- Project Preview Card -->
                    <img id="projectImagePreview" src="{{ asset('images/project_image.jpg') }}" alt="Project Image" class="rounded-md mb-4 object-cover animate-spin" style="animation-duration: 10s; width: 20%; margin: -0.5%">
                    <h3 id="projectTitlePreview" class="text-xl font-semibold text-red-600">Project Title</h3>
                    <p id="projectDescriptionPreview" class="text-gray-600 text-center">
                        Description of the project goes here. This section updates dynamically as you fill in the form.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to handle dynamic preview updates -->
    <script>
        // Get form elements
        const titleInput = document.getElementById('title');
        const descriptionInput = document.getElementById('description');
        const projectFilesInput = document.getElementById('project_files');

        // Get preview elements
        const projectTitlePreview = document.getElementById('projectTitlePreview');
        const projectDescriptionPreview = document.getElementById('projectDescriptionPreview');
        const projectImagePreview = document.getElementById('projectImagePreview');

        // Update preview title when user types
        titleInput.addEventListener('input', function() {
            projectTitlePreview.textContent = this.value || 'Project Title';
        });

        // Update preview description when user types
        descriptionInput.addEventListener('input', function() {
            projectDescriptionPreview.textContent = this.value || 'Description of the project goes here.';
        });

        // Update preview image when user uploads files
        projectFilesInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    projectImagePreview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            } else {
                projectImagePreview.src = '{{ asset('images/project_image.jpg') }}';
            }
        });
    </script>
</x-app-layout>
