<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
     crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>
 <h3>Formulario</h3>
    <form action="registroFormulario.php" method="POST">
    <div class="mb-3">
            <label class="from-lable">Usuario</label>
            <input type="text" class="form-control" name="usuario" required/>
        </div>

        <div class="mb-3">
            <label class="from-lable">Nombre</label>
            <input type="text" class="form-control" name="nombrE" required/>
        </div>
        
        <div class="mb-3">
            <label class="from-lable">Apellido paterno</label>
            <input type="text" class="form-control" name="apellidoPaterno" required/>
        </div>
     
        <div class="mb-3">
            <label class="from-lable">Apellido materno</label>
            <input type="text" class="form-control" name="apellidoMaterno" required/>
        </div>
    
        <div class="mb-3">
            <label class="from-lable">Telefono</label>
            <input type="text" class="form-control" name="telefono" required/>
        </div>
        
        <div class="mb-3">
            <label class="from-lable">Correo</label>
            <input type="text" class="form-control" name="correo" required/>
        </div>
         
        <div class="mb-3">
            <label class="from-lable">Contraseña</label>
            <input type="text" class="form-control" name="pass" required/>
        </div>
        <input type="submit" name="enviar" value="Insertar datos" class="btn btn-primary">
    </form> 

<table class="table">
        <thead>
          <tr>
            <th scope="col">Usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Contraseña</th>
          </tr>
        </thead>
        <tbody>
        <?php
          include('conec.php'); // Conexion a la bd
          $consulta = "SELECT * FROM form";

          $resultado =mysqli_query($conexion,$consulta);

          while($fila =mysqli_fetch_array($resultado)){

          
          ?>
             <tr>
            <th scope="row"> <?php echo $fila["usuario"] ?></th>
            <td> <?php echo $fila["nombre"] ?></td>
            <td> <?php echo $fila["apellidoPaterno"] ?></td>
            <td> <?php echo $fila["apellidoMaterno"] ?></td>
            <td> <?php echo $fila["telefono"] ?></td>
            <td> <?php echo $fila["correo"] ?></td>
            <td> <?php echo $fila["pass"] ?></td>


            <!-- BOTON ELIMINAR-->
            <td>
              <a target="_self" href="acciones/eliminarFabricante.php?id=<?php echo $fila["usuario"] ?>">
              <i class="bi bi-trash text-danger"></i></a>
            </td>
          </tr>
          <tr> 
          <?php } ?>
        </tbody>
      </table>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</body>
</html>
