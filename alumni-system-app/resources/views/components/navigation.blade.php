<!-- resources/views/layouts/navigation.blade.php
<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-white text-lg font-semibold">
            <a href="{{ url('/') }}">Home</a>
        </div>
        <div>
            @auth
                <a href="{{ route('profile.show') }}" class="text-white hover:underline">Profile</a>
                <a href="{{ route('logout') }}" class="text-white hover:underline ml-4" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}" class="text-white hover:underline">Login</a>
                <a href="{{ route('register') }}" class="text-white hover:underline ml-4">Register</a>
            @endauth
        </div>
    </div>
</nav> -->
