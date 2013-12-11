<?php 
require_once('contacto.php'); 
if(isset($_GET['id'])){ 
	$modelo=new Contacto(); 
	$contacto=$modelo->eliminarID($_GET['id']); 
	echo "Eliminado";
} 
?>
 <form method="post" action="Directorio.php">
      
<input type="submit" value="Volver" /></br
