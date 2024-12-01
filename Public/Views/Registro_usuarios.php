<?php

$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Correo = $_POST["Correo"];
$CUIT = $_POST["CUIT"];
$Password = $_POST["Password"];



if ($Nombre !=""){
echo "el usuario es"." ". $Nombre;
echo"<br>";
}
if ($Apellido !=""){
    echo "el telefono es"." ". $Apellido;echo"<br>";
    }
    if ($Correo !=""){
        echo "el Correo es"." ". $Correo;echo"<br>";
        }
    if ($CUIT !=""){
        echo "el CUIT es"." ". $CUIT;echo"<br>";
        }
        if ($Password !=""){
            echo "el Password es"." ". $Password;echo"<br>";
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

$query = "INSERT INTO Usuarios (Nombre, Apellido, Correo, CUIT, Password) VALUES ('$Nombre','$Apellido','$Correo','$CUIT','$Password')";

mysqli_query($conexion, $query);



mysqli_close($conexion);
?>