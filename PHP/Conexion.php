<?php

  $conn=mysqli_connect('bdbonche.mysql.database.azure.com','Administrador@bdbonche','Password2019','dbcontacto');

  if(mysqli_connect_error($conn)){
  echo "Fallo al conectar a mysql: ".mysqli_connect_error();
}

 ?>
