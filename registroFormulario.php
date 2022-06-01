<?php

include('conec.php');
if(isset($_POST['enviar'])){


    $usuario = $_POST ['usuario'];
    $nombrE = $_POST ['nombrE'];
    $apellidoPaterno = $_POST ['apellidoPaterno'];
    $apellidoMaterno = $_POST ['apellidoMaterno'];
    $telefono = $_POST ['telefono'];
    $correo = $_POST ['correo'];
    $pass = $_POST ['pass'];
    $insertardatos = "INSERT INTO form (usuario,nombrE,apellidoPaterno,apellidoMaterno,telefono,correo,pass) VALUE ('$usuario','$nombrE','$apellidoPaterno', '$apellidoMaterno', '$telefono', '$correo','$pass')";
    $resultado = mysqli_query ($conexion,$insertardatos);

    if(!$resultado){
        echo '<script>alert("Los datos se insertaron")</script>';
    }
    else{
        echo '<script>alert("Los datos si se insertaron")</script>';
    }
}
header('Location: index.html');
?>