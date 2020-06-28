<?php
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $numTelefono = $_POST['numTelefono'];
   
  if(mail('infoasesoriaseninformatica@gmail.com','Posible cliente',$nombre." ".$correo." ".$numTelefono)){
     echo "Solicitud enviada"
  }
  else{
    echo "Solicitud no enviada"
  }

?>