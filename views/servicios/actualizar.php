<h1 class="nombre-pagina">Servicios</h1>
<p class="descripcion-pagina">Actualiza los valores del Servicio</p>

<div class="barra-servicios">
    <a class="boton" href="/servicios">Volver</a>
</div>

<?php 
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form method="POST" class="formulario">
    <?php include_once __DIR__ . '/formulario.php' ?>

    <input type="submit" value="Actualizar Servicio" class="boton">
</form>