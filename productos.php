<?php include("template/cabecera.php");?>

<?php 
include("administrador/config/bd.php");

$sentenciaSQL=$conexion->prepare("SELECT * FROM venta");
$sentenciaSQL->execute();
$listaVentas=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>
<?php    foreach ($listaVentas as $venta){ ?>
<div class="col-md-3">  
<div class="card">
    <img class="card-img-top" src="./img/<?php echo $venta ['imagen'];  ?>" alt="">
    <div class="card-body">
        <h4 class="card-title"><?php echo $venta ['nombre']; ?></h4>
        <a name="" id="" class="btn btn-primary" href="#" role="Ver más"></a>
    </div>
</div> 
</div>
<?php  } ?>

<?php include("template/pie.php");?>
