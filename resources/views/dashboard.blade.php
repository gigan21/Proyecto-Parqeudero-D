<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenido al Dashboard</h1>
    <p>Has iniciado sesión correctamente.</p>
    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Cerrar Sesión</button>
    </form>
</body>
</html>