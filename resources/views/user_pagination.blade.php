<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css"></link>
        <title>Laravel</title>

    </head>
    <body>
        <div class="container">
            @foreach($users as $user)
                <p>{{ $user->name}}</p>
            @endforeach

            {{ $users->links()}}
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
