<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/register" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter the name">
        <input type="email" name="email" placeholder="Enter the email">
        <input type="tel" name="phone" placeholder="Enter the phone">
        <input type="password" name="password" placeholder="Enter the password">
        <input type="submit">
</form>
</body>
</html>
