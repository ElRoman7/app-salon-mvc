<h1 class="nombre-pagina">Servicios</h1>
<p class="descripcion-pagina">LLena todos los campos para crear un nuevo Servicio</p>

<div class="barra-servicios">
    <a class="boton" href="<?php echo $_SERVER['HTTP_REFERER'];?>">Volver</a>
</div>

<?php 
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form action="/servicios/crear" method="POST" class="formulario">
    <?php include_once __DIR__ . '/formulario.php' ?>

    <input type="submit" value="Guardar Servicio" class="boton">
</form>