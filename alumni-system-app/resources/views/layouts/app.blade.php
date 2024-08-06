<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your App')</title>
    @stack('styles')
</head>
<body>
    <div class="container mx-auto px-4 py-8">
        @hasSection('no-navigation')
            @yield('content')
        @else
            <nav>
                <!-- Your navigation here -->
            </nav>
            <main>
                @yield('content')
            </main>
        @endif
    </div>
</body>
</html>
