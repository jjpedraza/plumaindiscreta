<html>
<body>
<center>
<?php
$recipiente = "masupeco@hotmail.com";
$asunto = "Inscripcion en linea";
$error = 0;
$fecha = $_POST['fecha'];
$nombre = $_POST['nombre'];
$calle = $_POST['calle'];
$numero = $_POST['num'];
$colonia = $_POST['colonia'];
$codigo = $_POST['codigo'];
$poblacion = $_POST['poblacion'];
$municipio = $_POST['municipio'];
$estado = $_POST['estado'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$institucion = $_POST['institucion'];
$direccion = $_POST['direccion'];
$num = $_POST['nume'];
$col = $_POST['col'];
$postal = $_POST['postal'];
$delegacion = $_POST['delegacion'];
$mun = $_POST['mun'];
$estado = $_POST['edo'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$profesion = $_POST['profesion'];
$cedula = $_POST['cedula'];
$si = $_POST['si'];
$no = $_POST['no'];
$tiempo = $_POST['impartio'];
$experiencia = $_POST['experiencia'];
$espera = $_POST['espera'];
$entero = $_POST['entero'];
$headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Content-type:text/html; charset=iso-8859-1\r\n";
   $headers .= "From: $email\r\n";
   $headers .= "Repaly-to: $email\r\n";
   $message .="Fecha de Iscripcion: ".$fecha."<br>";
   $message .="Nombre: ".$nombre."<br>";
   $message .="Calle: ".$calle."<br>";
   $message .="Numero : ".$num."<br>";
   $message .="Colonia: ".$colonia."<br>";
   $message .="Codigo Postal: ".$codigo."<br>";
   $message .="Poblacion: ".$poblacion."<br>";
   $message .="Municipio : ".$municipio."<br>";
   $message .="Estado  : ".$estado."<br>";
   $message .="Telefono: ".$telefono."<br>";
   $message .="Celular: ".$celular."<br>";
   $message .="Correo: ".$correo."<br>";
   $message .="Nombre de la Institucion: ".$institucion."<br>";
   $message .="Calle Institucion : ".$direccion."<br>";
   $message .="Num. de la Institucion : ".$nume."<br>";
   $message .="Col. de la Institucion ".$col."<br>";
   $message .="C.P: ".$postal."<br>";
   $message .="Delegacion : ".$delegacion."<br>";
   $message .="Municipio de la Institucion   : ".$mun."<br>";
   $message .="Edo: ".$edo."<br>";
   $message .="Tel : ".$tel."<br>";
   $message .="Mail  : ".$mail."<br>";
   $message .="Profesion: ".$profesion."<br>";
   $message .="Cedula : ".$cedula."<br>";
   $message .="Si : ".$si."<br>";
   $message .="No: ".$no."<br>";
   $message .="Tiempo : ".$impartio."<br>";
   $message .="Experiencia : ".$experiencia."<br>";
   $message .="Que espera: ".$espera."<br>";
   $message .="Como se entero: ".$entero."<br>";
   $message .= stripslashes($message);
   
   mail($recipiente,$asunto,$message,$headers);
   echo "<b><h3>La informaci&oacute;n se ha enviado correctamente!</h3></b><BR><br><br>";
  echo "<A HREF='http://amecod.org/'><U>Regresar</U></A>."; 

?>
</center>
</body>

</html>
