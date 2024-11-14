{{-- resources/views/employer/view_project.blade.php --}}
<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="bg-white shadow rounded-lg p-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $project->name }}</h1>
            
            <p class="text-gray-600 mb-2"><strong>Description:</strong> {{ $project->description }}</p>
            
            <div class="flex justify-between mt-4">
                <div class="text-gray-700">
                    <p><strong>Start Date:</strong> {{ $project->start_date->format('M d, Y') }}</p>
                    <p><strong>End Date:</strong> {{ $project->end_date ? $project->end_date->format('M d, Y') : 'Ongoing' }}</p>
                </div>
                <div>
                    <span class="inline-block px-4 py-2 text-white rounded-full {{ $project->status == 'completed' ? 'bg-green-500' : 'bg-yellow-500' }}">
                        {{ ucfirst($project->status) }}
                    </span>
                </div>
            </div>

            <!-- <div class="mt-6">
                <a href="{{ route('projects.edit', $project->id) }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">Edit Project</a>
                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline-block ml-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="inline-block bg-red-500 text-white px-4 py-2 rounded shadow hover:bg-red-600">Delete Project</button>
                </form>
            </div> -->
        </div>
    </div>
</x-app-layout>
