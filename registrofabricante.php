<?php

include('conec.php');
if(isset($_POST['enviar'])){

    $nomFabricante = $_POST ['nomFabricante'];
    $insertarfabricante = "INSERT INTO fabricante (nombre) VALUE ('$nomFabricante')";
    $resultado = mysqli_query ($conexion,$insertarfabricante);

    if(!$resultado){
        echo '<script>alert("Los datos se insertaron")</script>';
    }
    else{
        echo '<script>alert("Los datos si se insertaron")</script>';
    }
}
header('Location: index.html');
?>