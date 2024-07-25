<!-- resources/views/components/app-layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'App' }}</title>
    <!-- Add your stylesheets and scripts here -->
</head>
<body>
    @include('components.navigation')

    {{ $slot }}

    <!-- Add your scripts here -->
</body>
</html>
