<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color: red;">
            {{ __('Manage Users') }}
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

                    <form action="{{ route('superuser.storeUser') }}" method="POST">
                        @csrf
                        <div>
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div>
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password">
                        </div>
                        <div>
                            <label for="roles">Roles:</label>
                            <select id="roles" name="roles[]" multiple>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <button type="submit">Create User</button>
                        </div>
                    </form>

                    <h3 class="mt-6">Existing Users:</h3>
                    <ul>
                        @foreach($users as $user)
                            <li>{{ $user->name }} - {{ $user->email }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
