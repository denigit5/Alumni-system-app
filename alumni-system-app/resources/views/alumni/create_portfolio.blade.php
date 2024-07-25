<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color: red;">
            {{ __('Create Portfolio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('alumni.storePortfolio') }}" method="POST">
                        @csrf
                        <div>
                            <label for="basic_info">Basic Information:</label>
                            <input type="text" id="basic_info" name="basic_info">
                        </div>
                        <div>
                            <label for="education">Education:</label>
                            <input type="text" id="education" name="education">
                        </div>
                        <div>
                            <label for="work_experience">Work Experience:</label>
                            <input type="text" id="work_experience" name="work_experience">
                        </div>
                        <div>
                            <label for="skills">Skills:</label>
                            <input type="text" id="skills" name="skills">
                        </div>
                        <div>
                            <button type="submit">Create Portfolio</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
