<?php
  include("conexion_BD.php");
  
 if (isset($_POST['enviar'])) {
    
 
  if (strlen($_POST['name']) >= 1 && 
      strlen($_POST['apellido']) >= 1 &&
      strlen($_POST['email']) >= 1 &&
      strlen($_POST['telefono']) >= 1 ) {

    $name = $_POST['name'];
    $apellido = $_POST['apellido'];
    $email = trim($_POST['email']);
    $telefono = trim($_POST['telefono']);

    $consulta = "INSERT INTO donaciones( nombre_completo, apellido, email, telefono) VALUES ('$name','$apellido','$email','$telefono')";

    $resultado =mysqli_query($conexion,$consulta);

    if ($resultado) {
      
      ?>
        <h2 class="ok"> "REGISTRO EXITOSO</h2>
      <?php
    }else{
      ?>
        <h2 class="bad"> "UPS A OCURRIDO UN ERROR"</h2>
      <?php
    }
    
   }

 } 
 
