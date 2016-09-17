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
            @if(count(Auth::user()->unreadNotifications))
                <h1>Notifiations</h1>
                @foreach(Auth::user()->unreadNotifications as $notifications)
                    @php  //<li>{{snake_case(class_basename($notifications->type))}}</li>
                    <li>@include('notifications.'.snake_case(class_basename($notifications->type)))</li>
                    @php  //<li class="fddf">{{$notifications->data['subscription_ended']['date']}}</li>
                @endforeach

                <form method="post" action="/users/{{Auth::id()}}/notifications">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <button type="submit">Mark As Read</button>
                </form>
            @endif
            <h1>My site</h1>
        </div>
    </body>
</html>
