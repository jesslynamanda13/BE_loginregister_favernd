<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    hello user!
    Reset password
    {{-- <form action="{{route('update', $user->id)}}" method = "POST" enctype = "multipart/form-data">
        @csrf
        @method('patch')

    </form> --}}
    <a href="/logout" class="btn btn-primary">Logout</a>
</body>
</html>