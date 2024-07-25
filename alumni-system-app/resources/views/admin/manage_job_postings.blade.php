<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="margin-left: 70%; color: white; padding-top: 6rem;">
            
        </h2>
    </x-slot>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        body {
            background-color: white;
            font-family: Montserrat;
        }

        .text-light-gray {
            color: #353535;
        }

        .text-indigo-600 {
            color: #5a67d8;
        }

        .hover\:text-indigo-900:hover {
            color: #3b4366;
        }

        .text-red-600 {
            color: #dc2626;
        }

        .hover\:text-red-900:hover {
            color: #991b1b;
        }

        /* Table styles */
        .table-header {
            background-color: #dc2626; /* Red background for table header */
            color: white;
        }

        .table-row {
            background-color: #f3f4f6; /* Dull red background for table rows */
        }

        /* Style the edit button */
        .edit-button {
            color: #5a67d8;
        }

        .edit-button:hover {
            color: #3b4366;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark-gray overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-dark-gray border-b border-dark-gray text-light-gray">
                    @if(session('success'))
                        <div class="text-green-500">
                            {{ session('success') }}
                        </div>
                    @endif

                    <h3 class="text-lg font-bold text-light-gray" style="text-align: center; margin-top: -7rem;">Manage job postings</h3>

                    <table class="min-w-full">
                        <thead class="table-header">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium">Title</th>
                                <th class="px-6 py-3 text-left text-xs font-medium">Description</th>
                                <th class="px-6 py-3 text-left text-xs font-medium">Requirements</th>
                                <th class="px-6 py-3 text-left text-xs font-medium">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobs as $job)
                                <tr class="table-row">
                                    <td class="px-6 py-4">{{ $job->title }}</td>
                                    <td class="px-6 py-4">{{ $job->description }}</td>
                                    <td class="px-6 py-4">{{ $job->requirements }}</td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('admin.editJob', $job->id) }}" style="text-decoration: none; font-weight: 400; font-size: 15px;" class="edit-button hover:text-indigo-900">Edit</a>
                                        <form action="{{ route('admin.deleteJob', $job->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
