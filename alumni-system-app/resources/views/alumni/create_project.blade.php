<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color: red;">
            {{ __('Publish Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('alumni.storeProject') }}" method="POST">
                        @csrf
                        <div>
                            <label for="title">Project Title:</label>
                            <input type="text" id="title" name="title">
                        </div>
                        <div>
                            <label for="description">Project Description:</label>
                            <textarea id="description" name="description"></textarea>
                        </div>
                        <div>
                            <button type="submit">Publish Project</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
