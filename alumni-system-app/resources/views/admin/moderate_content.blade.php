<!-- resources/views/admin/moderate_content.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Moderate Content') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Portfolios to Moderate</h3>

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($portfolios as $portfolio)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $portfolio->title }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $portfolio->description }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <!-- Add moderation actions (approve/reject) here -->
                                        <!-- Example actions -->
                                        <button class="text-green-600 hover:text-green-900">Approve</button>
                                        <button class="text-red-600 hover:text-red-900">Reject</button>
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
