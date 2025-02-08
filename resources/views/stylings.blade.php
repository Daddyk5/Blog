<!-- resources/views/styling.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Styling Page in Laravel">
    <meta name="author" content="Your Name">
    <title>Styling View</title>

    <!-- Laravel Blade CSS Example -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- TailwindCSS or Bootstrap (Optional) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-center flex items-center justify-center min-h-screen">

    <div class="p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-3xl font-bold text-blue-600">Styling View Loaded Successfully</h1>
    </div>

</body>

</html>
