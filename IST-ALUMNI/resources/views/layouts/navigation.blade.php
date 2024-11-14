<nav x-data="{ isNavOpen: false, isImageModalOpen: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <img style="padding-top: 0.7rem; transform:scale(3);" src="{{ asset('images/ist-logo.png') }}" alt="IST Logo">

                <!-- Navigation Links -->
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('/')">
                    {{ __('Institution of Software Technology') }}
                </x-nav-link>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" style="width: 70%;">
                    <!-- New Links -->
                    <x-nav-link href="/" style="color: #D21502;">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link href="/about" style="color: #D21502;">
                        {{ __('About') }}
                    </x-nav-link>
                    <x-nav-link href="/contact" style="color: #D21502;">
                        {{ __('Contact') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- User Avatar and Settings Dropdown -->
            <div class="flex items-center space-x-4">
                <!-- Alumni Profile Picture (for alumni only) -->
                @if(Auth::guard('alumnus')->check())
                    <div class="flex items-center space-x-2">
                        <button @click="isImageModalOpen = !isImageModalOpen" class="flex items-center justify-center h-10 w-10 rounded-full border border-gray-300 overflow-hidden bg-gray-200">
                            <img style="margin-left: 10%;" src="{{ Auth::guard('alumnus')->user()->avatar ? asset('storage/' . Auth::guard('alumnus')->user()->avatar) : asset('images/avator.png') }}" class="object-cover w-full h-full">
                        </button>
                    </div>
                @endif

                <!-- Conditional Navigation Based on User Type -->
                <div class="mt-4">
                    @if(Auth::guard('alumnus')->check())
                        <a href="{{ route('alumni.dashboard') }}" class="text-gray-600 hover:text-gray-800"></a>
                    @elseif(Auth::guard('employer')->check())
                        <a href="{{ route('employers.dashboard') }}" class="text-gray-600 hover:text-gray-800"></a>
                    @endif
                </div>

                <!-- User Name -->
                <div class="text-gray-800 font-medium" style="margin-left: -1%; margin-right: -1rem;" id="user-name">
                    @if(Auth::guard('alumnus')->check())
                        {{ Auth::guard('alumnus')->user()->name }}
                    @elseif(Auth::guard('employer')->check())
                        {{ Auth::guard('employer')->user()->name }}
                    @else
                        {{ __('Guest') }}
                    @endif
                </div>

                <!-- Dropdown for Profile Options -->
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Only Alumni can upload an image -->
                        @if(Auth::guard('alumnus')->check())
                            <x-dropdown-link @click="isImageModalOpen = !isImageModalOpen">
                                {{ __('Upload Image') }}
                            </x-dropdown-link>
                        @endif
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>

        <!-- Hamburger for small screens -->
        <div class="-me-2 flex items-center sm:hidden">
            <button @click="isNavOpen = !isNavOpen" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': isNavOpen, 'inline-flex': !isNavOpen }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': !isNavOpen, 'inline-flex': isNavOpen }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Image Modal for Upload (Alumni Only) -->
    @if(Auth::guard('alumnus')->check())
        <div x-show="isImageModalOpen" @click.away="isImageModalOpen = false" class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75 z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
                <h2 class="text-lg font-bold mb-4">Upload Photo</h2>
                <form method="POST" action="{{ route('upload.avatar') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700" for="avatar">Select a photo:</label>
                        <input type="file" id="avatar" name="avatar" accept="image/*" class="mt-1 block w-full">
                        <div id="crop-container" class="relative mt-2 w-full h-72 bg-gray-100 border-dashed border-2 border-gray-300 flex justify-center items-center overflow-hidden">
                            <img id="image-preview" src="#" alt="Cropping Image" class="object-cover max-h-72" style="display:none;">
                            <div class="absolute border-gray-500" style="height: 300px; width: 300px;"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-500 hover:bg-red-600 focus:outline-none">Upload</button>
                    </div>
                </form>
                <button @click="isImageModalOpen = false" class="absolute top-2 right-2 text-gray-700">X</button>
            </div>
        </div>
    @endif
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const fileInput = document.getElementById('avatar');
        const imgPreview = document.getElementById('image-preview');
        const userNameDiv = document.getElementById('user-name');

        if (fileInput) {
            fileInput.addEventListener('change', function (e) {
                if (e.target.files.length > 0) {
                    const file = e.target.files[0];
                    imgPreview.src = URL.createObjectURL(file);
                    imgPreview.style.display = 'block';
                } else {
                    imgPreview.style.display = 'none';
                }
            });
        }
    });
</script>
