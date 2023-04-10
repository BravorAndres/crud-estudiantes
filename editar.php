<?php 

// Path: editar.php
// Compare this snippet from guardar.php:

//update
include('db.php');
if(isset($_POST['update'])){
    $iden=$_POST['iden'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fechaNaci = $_POST['fechaNaci'];
    $papa = $_POST['papa'];

    $query = "UPDATE estudiante set nombre = '$nombre', apellido = '$apellido', fechaNacimiento = '$fechaNaci', papa = '$papa' WHERE id = '$iden'";
    $result = mysqli_query($conn, $query);
    if(!$result){
        $_SESSION['message'] = 'Error al actualizar';
        $_SESSION['tipo_mensaje'] = 'danger';
        die("Query Failed");
    }else{
        $_SESSION['message'] = 'Datos actualizados';
        $_SESSION['tipo_mensaje'] = 'success';
    }
    header("Location: index.php");
}

?>