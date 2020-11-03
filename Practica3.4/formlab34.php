<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Practica 3.4</title>
</head>
<body>
    <form action="Lab34.php" method="POST">
        <label for="numero">Escriba un número</label>
        <input type="text" name="numero" pattern="([0])|([-]?[1-9][0-9]*(\.[0-9]+)?)|([a-z]+)" required /> <br />
        <input type="submit" value="Enviar" /> <br />
    </form> 
</body>
</html>