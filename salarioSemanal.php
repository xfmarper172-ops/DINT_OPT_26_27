<?php
    $horas = $_GET['txtHoras'];
    $precio = $_GET['txtPrecio'];

    if (empty($_POST['txtPrecio'])) {
        $precio = 15;
    }

    $salarioSemanal = ($horas * $precio) * 5;

    echo "El salario semanal es: "." $salarioSemanal "." <br>";
    echo "El salario mensual es: ". ($salarioSemanal * 4);