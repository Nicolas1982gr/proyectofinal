<?php
$servername = "localhots";
$username = "USUARIO";
$password = "Password";
$dbname = "login";

$conexion = mysqli_connect("127.0.0.1:3306","root","","login");

if ($conexion === false){
    echo "NO SE CONECTO";
    echo "<br>";
}
 else{
    echo "SI SE CONECTO";
    echo "<br>";
 }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["USUARIO"];
    $password = $_POST["Password"];

    $query = "SELECT * FROM admin WHERE USUARIO = '$username'";
    
    mysqli_query($conexion, $query);
    
    $result = $conexion->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["Password"])) {
            echo "Sesión iniciada con éxito";
            // Inicia sesión y redirige a página principal
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }
}

$conexion->close();

?>