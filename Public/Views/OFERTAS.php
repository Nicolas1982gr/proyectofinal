<?php

$N_LIC = $_POST["N_licitacion"];
$Monto = $_POST["Monto"];
$hora = $_POST["Hora"];
$archivo = $_POST["uploads"];



if ($N_LIC !=""){
echo "El numero de licitacion es"." ". $N_LIC;
echo"<br>";
}
if ($Monto !=""){
    echo "El monto es"." ". $Monto;echo"<br>";
    }
    if ($hora !=""){
        echo "La hora es"." ". $hora;echo"<br>";
        }
        if ($archivo !=""){
            echo "se cargo el archivo"." ". $archivo;echo"<br>";
            }
//conexion a base de datos ( servidor:puesto del xammp, usuario, password)

$conexion = mysqli_connect("127.0.0.1:3306","root","","login");

if ($conexion === false){
    echo "NO SE CONECTO";
    echo "<br>";
}
 else{
    echo "SI SE CONECTO";
    echo "<br>";
 }

 $query = "INSERT INTO ofertas (LIC_N, MONTO, FECHA, ARCHIVO ) VALUES ('$N_LIC','$Monto','$hora','$archivo')";

 mysqli_query($conexion, $query);

?>

