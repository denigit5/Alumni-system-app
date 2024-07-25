<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color: red;">
            {{ __('Manage Permissions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(session('success'))
                        <div class="text-green-500">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('superuser.storePermission') }}" method="POST">
                        @csrf
                        <div>
                            <label for="name">Permission Name:</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div>
                            <button type="submit">Create Permission</button>
                        </div>
                    </form>

                    <h3 class="mt-6">Existing Permissions:</h3>
                    <ul>
                        @foreach($permissions as $permission)
                            <li>{{ $permission->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
