<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Email testing</title>

    </head>
    <body>
        <div class="container">
            <ul>
                <li>{{ $users->implode('name', ', ')}}</li>
            </ul>
            @foreach($users as $user)
                <li class="{{ $loop->first?'first':''}}">{{$user->name}}</li>
            @endforeach

            @foreach($users->chunk(4) as $chunk)
                    {{ var_dump($chunk) }}
            @endforeach

        </div>
    </body>
</html>
