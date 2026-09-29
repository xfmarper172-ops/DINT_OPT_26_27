<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salarioSemanal.php" method="get">
        <label for="txtHoras">Ingrese el numero de horas trabajadas:</label>
        <input type="number" name="txtHoras" id="txtHoras" required><br><br>
        
        <label for="txtPrecio">Ingrese el precio de cada hora:</label>
        <input type="number" name="txtPrecio" id="txtPrecio" required><br><br>

        <input type="submit" value="Generar salario semanal">
</body>
</html>