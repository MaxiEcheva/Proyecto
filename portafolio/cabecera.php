<?php
session_start();
if(isset($_SESSION['usuario'])!="maxi"){
    header("location:login.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
<a href="index.php">Inicio</a>
<a href="portafolios.php">Portafolios</a>
<a href="cerrar.php">Cerrar</a>
<br>
