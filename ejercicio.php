<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $nombre = "";
        $apellido = "";
        $correo = "";
        $dni = "";
        $fecha = "";



        $modulos = [];
        

        if(isset($_POST['enviar'])){

            $errores = validar($_POST['nombre'], $_POST['apellido'], $_POST['dni'], $_POST['correo'], $_POST['fecha']);

            
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $correo = $_POST['correo'];
                $dni = $_POST['dni'];
                $fecha = $_POST['fecha'];

                if(isset($_POST['modulos'])==false){

                    foreach($modulos as $i){
                        $i="";
                    }
                } else {
                    $modulos = $_POST['modulos'];
                }
            
    

        }
            
    ?>

        <form name="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            Nombre Alumno: <input type="text" name="nombre" value="<?php
            if(isset($errores['nombre'])){
                echo $errores['nombre'];
            } else {
                echo $nombre;
            }
            ?>">
            <br>
            <br>

            Apellido Alumno: <input type="text" name="apellido" value="<?php
            if(isset($errores['apellido'])){
                echo $errores['apellido'];
            } else {
                echo $apellido;
            }
            ?>">
            
            <br>
            <br>

            Correo: <input type="text" name="correo" value="<?php
            if(isset($errores['correo'])){
                echo $errores['correo'];
            } else {
                echo $correo;
            }
            ?>">

            <br>
            <br>

            DNI: <input type="text" name="dni" value="<?php
            if(isset($errores['dni'])){
                echo $errores['dni'];
            } else {
                echo $dni;
            }
            ?>">

            <br>
            <br>
            Fecha: <input type="date" name="fecha" value="<?php
            if(isset($errores['fecha'])){
                $errores['fecha'];
            } else {
                echo $fecha;
            }
            ?>">

        <p>Módulos que cursa:</p>
               <input type="checkbox" name="modulos[]" value="DWES"<?php
                    if(isset($_POST['modulos']) && in_array("DWES",$_POST['modulos']))
                         echo 'checked="checked"';
               ?>
               />
               Desarrollo web en entorno servidor<br />

               <input type="checkbox" name="modulos[]" value="DWEC"<?php
                    if(isset($_POST['modulos']) && in_array("DWEC",$_POST['modulos']))
                         echo 'checked="checked"';
               ?>
                />
               Desarrollo web en entorno cliente<br />

               <input type="checkbox" name="modulos[]" value="DIWEB"<?php
                    if(isset($_POST['modulos']) && in_array("DIWEB",$_POST['modulos']))
                         echo 'checked="checked"';
               ?>
          />
               Diseño de interfaces web<br />
               <br />

        <input type="submit" value="Enviar" name="enviar"/>



</body>
</html>





<?php

function validar($nombre, $apellido, $dni, $correo, $fecha){
    $errores = [];

    if($nombre==""){
        $errores['nombre'] = "Error, nombre es nulo";
    }

    if($apellido==""){
        $errores['apellido'] = "Error, apellido es nulo";
    }

    if($dni==""){
        $errores['dni'] = "Error, dni es nulo";
    }

    if($correo==""){
        $errores['correo'] = "Error, correo es nulo";
    }
    if($fecha==""){
        $errores['fecha'] = "Error, fecha es nulo";
    }

    return $errores;
}

?>