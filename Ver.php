<html>
  <head>
<title>Ver</title>
  </head>
  <body>
    <h2>Ver Contacto:</h2>
<?php
require_once('contacto.php');
if(isset($_GET['id']) && $_GET['id'] != ''){
	
	$modelo=new Contacto(); 
	$resultado=$modelo->seleccionarID($_GET['id']);
?>
   
   <form method="post" action="Directorio.php">

<input type="hidden" name="id"value="<?php echo$result['id'];?>"/> <p/>

<label for="txtNombre"><h6>Nombre: </h6> </label><br/>
<?php echo $resultado['nombre'];?><p/>
      
<label for="txtTelefono"><h6>Telefono: </h6></label><br/>
      <?php echo $resultado['telefono'];?><p/>

<label for="txtCelular"><h6>Celular: </h6></label><br/>
      <?php echo$resultado['celular'];?><p/>

<label for="txtDomicilio"><h6>Domicilio: </h6></label><br/>
      <?php echo$resultado['direccion'];?><p/>

<label for="txtColonia"><h6>Colonia: </h6></label><br/>
      <?php echo$resultado['colonia'];?><p/>

<label for="txtCP"><h6>CP: </h6></label><br/>
      <?php echo$resultado['cp'];?><p/>


<input type="submit" value="Volver" />


    <?php
	 
	 }else{
	 echo "No tiene permiso para ingresar a esta pagina.";
	 }
    ?>
 </form>
  	
  </body>
