<!-- resources/views/profile.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Perfil</h1>
    <h3>Welcome</h3>
    <p> {{ Auth::user()->name }}!</p>
    <p>correo electronico {{ Auth::user()->email }}</p>
</body>
</html>
