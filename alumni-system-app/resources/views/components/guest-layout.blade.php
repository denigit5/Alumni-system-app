<!-- resources/views/components/guest.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Layout</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            {{ $slot }}
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
