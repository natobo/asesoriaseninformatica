<?php
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $numTelefono = $_POST['numTelefono'];

  if(mail('informacion@asesoriaseninformatica.com','Posible cliente',$nombre)){
     echo "Solicitud enviada";
  }
  else{
    echo "Solicitud no enviada";
  }

?>
