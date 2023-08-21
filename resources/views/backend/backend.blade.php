<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('') }}" rel="stylesheet">
</head>
<body>
    <nav>
        <div><a href="{{route("frontend.index")}}">Home</a></div>
    </nav>
    <h1 class="text-danger">backend</h1>

    <a href={{route("roles.edit")}}>edit roles</a>

    <script src="{{ asset('path/to/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>