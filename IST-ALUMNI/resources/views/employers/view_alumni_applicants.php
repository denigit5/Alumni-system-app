{{-- resources/views/employer/view_alumni.blade.php --}}
<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">View Alumni</h1>

        @if($alumni->isEmpty())
            <p class="text-gray-600">No alumni found.</p>
        @else
            <div class="overflow-x-auto shadow-md rounded-lg">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2 px-4 border-b">Name</th>
                            <th class="py-2 px-4 border-b">Email</th>
                            <th class="py-2 px-4 border-b">Graduation Year</th>
                            <th class="py-2 px-4 border-b">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alumni as $alumnus)
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4 border-b">{{ $alumnus->name }}</td>
                                <td class="py-2 px-4 border-b">{{ $alumnus->email }}</td>
                                <td class="py-2 px-4 border-b">{{ $alumnus->graduation_year }}</td>
                                <td class="py-2 px-4 border-b">
                                    <a href="{{ route('alumni.show', $alumnus->id) }}" class="text-blue-600 hover:underline">View</a>
                                    <a href="{{ route('alumni.edit', $alumnus->id) }}" class="text-yellow-600 hover:underline ml-4">Edit</a>
                                    <form action="{{ route('alumni.destroy', $alumnus->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline ml-4">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-app-layout>
