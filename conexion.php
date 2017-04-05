# Conexion-de-bases-de-datos-php
//Este es la conexión de un base de datos de php a mysql y sus consulta a la  bases de datos 

<?php
//conexion de bases de datos
$bd =mysqli_connect('localhost','root','password','Basesdatos');

//verificar la conexion de bases de datos
if(mysqli_errno($bd)){
  echo 'Falla de conexion:'.mysqli_connect_error();;
}else {
  echo "Exito conexion: ";
}
//crea la consulta de la bases de datos 
$query = "SELECT * FROM tabla";
//seleciona una tabla de la bases de datos
$relsult = mysqli_query($bd, $query);

//muestra la bases de datos de la tabla
while ($fila=mysqli_fetch_assoc($relsult)) {
  echo $fila['Columna1'].' '. $fila['Columna2'].PHP_EOL;
}

//Liberar la memoria de resultado
mysqli_free_result($relsult);
//cerra bases de datos
mysqli_close($bd);

 ?>

