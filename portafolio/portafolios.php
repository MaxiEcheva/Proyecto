<?php include("cabecera.php");?>
<?php include("conexion.php");?>
<?php
if($_POST){
print_r($_POST);
$nombre=$_POST['nombre'];

$objConexion= new conexion();

$sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `Descripcion`) VALUES (NULL'.$nombre.', 'hola soy un proyecto ', 'imagen.jpg', 'hola soy un nuevo proyecto de hace un tiempo');";

$objConexion->ejecutar($sql);

    
        
        
    
   // $objConexion->ejecutar($sql);
    

}

    //$objConexion= new conexion();
   // $resultado=$objConexion->consultar("SELECT * FROM `proyectos`");

      //  print_r($resultado);

?>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
    <div class="card-header">
       Datos del proyecto
    </div>
    <div class="card-body">
        <form action="portafolios.php" method="post" enctype="multipart/form-data">

    Nombre del proyecto : <input class="form-control" type="text" name="nombre" id="">
    <br/>
    Imagen del proyecto : <input class="form-control" type="file" name="" id="archivo">
    <br/>

    <input class="btn btn-success" type="submit" value="Enviar proyecto">
</form>
    </div>
    
</div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive-md">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>3</td>
                <td>Aplicacion web</td>
                <td>Imagen.jpg</td>
            </tr>
        </tbody>
    </table>
</div>
        </div>
        
    </div>
</div>







 <?php include("pie.php");?>

</body>
</html>