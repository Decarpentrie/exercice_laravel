<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form  action={{"/customer"}} method="post">
            {{csrf_field()}}
            <input type="text" name="prenom">
            <button type="submit">ok</button>
        </form>
    </body>
</html>
