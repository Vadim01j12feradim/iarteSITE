<?php
    include('conexion.php');

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];
    $estado = $_POST['estado'];
    $municipio = $_POST['municipio'];
    $colonia = $_POST['colonia'];
    $ocupacion = $_POST['ocupacion'];
    $nacionalidad = $_POST['nacionalidad'];

    $identificacion = $telefono.$_FILES['identificacion']['name'];
    $tmpIdentificacion = $_FILES['identificacion']['tmp_name'];


    $comprobante = $telefono.$_FILES['comprobante']['name'];
    $tmpComprobante = $_FILES['comprobante']['tmp_name'];

    if (isset($_FILES['imagen1']) && $_FILES['imagen1']['error'] === UPLOAD_ERR_OK) {
        $imagen1 = 'im1'.$telefono.$_FILES['imagen1']['name'];
        $tmpImagen1 = $_FILES['imagen1']['tmp_name'];
        move_uploaded_file($tmpImagen1,'imagenes'.'/'.$imagen1);
        $rutaI1 = 'imagenes/'.$imagen1;
        $cadena1 = $_POST['cadena1'];
    }else{
        $rutaI1 = NULL;
        $cadena1 = NULL;
    }


    if (isset($_FILES['imagen2']) && $_FILES['imagen2']['error'] === UPLOAD_ERR_OK) {
        $imagen2 = 'im2'.$telefono.$_FILES['imagen2']['name'];
        $tmpImagen2 = $_FILES['imagen2']['tmp_name'];
        move_uploaded_file($tmpImagen2,'imagenes'.'/'.$imagen2);
        $rutaI2 = 'imagenes/'.$imagen2;
        $cadena2 = $_POST['cadena2'];
    }else{
        $rutaI2 = NULL;
        $cadena2 = NULL;
    }

    if (isset($_FILES['imagen3']) && $_FILES['imagen3']['error'] === UPLOAD_ERR_OK) {
        $imagen3 = 'im3'.$telefono.$_FILES['imagen3']['name'];
        $tmpImagen3 = $_FILES['imagen3']['tmp_name'];
        move_uploaded_file($tmpImagen3,'imagenes'.'/'.$imagen3);
        $rutaI3 = 'imagenes/'.$imagen3;
        $cadena3 = $_POST['cadena3'];
    }else{
        $rutaI3 = NULL;
        $cadena3 = NULL;
    }

    if (isset($_FILES['imagen4']) && $_FILES['imagen4']['error'] === UPLOAD_ERR_OK) {
        $imagen4 = 'im4'.$telefono.$_FILES['imagen4']['name'];
        $tmpImagen4 = $_FILES['imagen4']['tmp_name'];
        move_uploaded_file($tmpImagen4,'imagenes'.'/'.$imagen4);
        $rutaI4 = 'imagenes/'.$imagen4;
        $cadena4 = $_POST['cadena4'];
    }else{
        $rutaI4 = NULL;
        $cadena4 = NULL;
    }

    
/*
    $imagen2 = $_FILES['imagen2']['name'];
    $tmpImagen2 = $_FILES['imagen2']['tmp_name'];
    $cadena2 = $_POST['cadena2'];

    $imagen3 = $_FILES['imagen3']['name'];
    $tmpImagen3 = $_FILES['imagen3']['tmp_name'];
    $cadena3 = $_POST['cadena3'];

    $imagen4 = $_FILES['imagen4']['name'];
    $tmpImagen4 = $_FILES['imagen4']['tmp_name'];
    $cadena4 = $_POST['cadena4'];*/

    $manifiesto = $telefono.$_FILES['manifiesto']['name'];
    $tmpManifiesto = $_FILES['manifiesto']['tmp_name'];

    move_uploaded_file($tmpIdentificacion,'archivos'.'/'.$identificacion);
    move_uploaded_file($tmpComprobante,'archivos'.'/'.$comprobante);
    
    /*move_uploaded_file($tmpImagen2,'imagenes'.'/'.$imagen2);
    move_uploaded_file($tmpImagen3,'imagenes'.'/'.$imagen3);
    move_uploaded_file($tmpImagen4,'imagenes'.'/'.$imagen4);*/
    move_uploaded_file($tmpManifiesto,'archivos'.'/'.$manifiesto);

    $rutaIde = 'archivos/'.$identificacion;
    $rutaCom = 'archivos/'.$comprobante;
    $rutaMan = 'archivos/'.$manifiesto;

    $query = "INSERT INTO registro(nombre, telefono, correo, edad, estado, municipio, colonia, ocupacion, nacionalidad, identificacion,comprobante, imagen1, cadena1, imagen2, cadena2, imagen3, cadena3, imagen4, cadena4, manifiesto) VALUES('$nombre','$telefono','$correo',$edad,'$estado','$municipio','$colonia','$ocupacion','$nacionalidad','$rutaIde','$rutaCom','$rutaI1','$cadena1','$rutaI2','$cadena2','$rutaI3','$cadena3','$rutaI4','$cadena4','$rutaMan')";

    $conexion = conectar();

    if(ejecutar($conexion,$query)){
        echo '<script>alert("Registro exitoso. Muchas gracias :D");</script>';
        echo '<script>window.location.href = "./";</script>';
        exit;

    }else{
        echo "Fallo";
    }

    desconectar($conexion);

?>