<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email de verificación</title>
</head>
<body>
    <h1> Hola, {{$user->name}}!</h1>
    <h3> Pulsa en el siguiente enlace para verificar tu cuenta:</h3>
    <h3><a href="http://informatica.ieszaidinvergeles.org:9033/congresosApp/public/verify/{{$user->tokenNacho}}">Verificar cuenta</a></h3>
</body>
</html>