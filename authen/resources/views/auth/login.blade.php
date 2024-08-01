<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="post">
        @csrf
        <input type="email" name="email" placeholder="Enter the email">
        <input type="password" name="password" placeholder="Enter the password">
        <input type="submit" value="log in">
</form>
</body>
</html>