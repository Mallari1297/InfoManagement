
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        @csrf
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="submit" value="Submit">
    </form>
    <a href="{{route('register')}}">Register</a>
</body>
</html>
