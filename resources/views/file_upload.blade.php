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
            <form method="post" action="upload/" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="file" name="avatar">
                <input type="submit" name="submit" value="submit">
            </form>
        </div>
    </body>
</html>
