<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Practica3.5</title>
</head>
<body>
    <form action="Lab35.php" method="GET">
        <label for="filas">Escriba el numero de fila</label>
        <input type="text" name="filas" pattern="[1-9][0-9]*" required /> <br /> 
        <label for="columnas">Escriba el numero de columna</label>
        <input type="text" name="columnas" pattern="[1-9][0-9]*" required /> <br />
        <input type="submit" value="Enviar" /> <br />
    </form> 
</body>
</html>