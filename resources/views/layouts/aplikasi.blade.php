<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ 'css/style.css' }}">
    <title>Welcome to My Laravel 9</title>
</head>
<body>
    <div>
        <a href="localhost:8000/">Home</a> | <a href="localhost:8000/about">About</a> | <a href="localhost:8000/contact">Contact</a>
        @yield('konten')
    </div>
</body>
</html>