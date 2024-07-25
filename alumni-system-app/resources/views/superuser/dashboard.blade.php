<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color: red;">
            {{ __('Superuser Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3>Welcome to the Superuser Dashboard!</h3>
                    <ul>
                        <li><a href="{{ route('superuser.manageRoles') }}">Manage Roles</a></li>
                        <li><a href="{{ route('superuser.managePermissions') }}">Manage Permissions</a></li>
                        <li><a href="{{ route('superuser.manageUsers') }}">Manage Users</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
