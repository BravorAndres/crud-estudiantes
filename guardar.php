<?php  


include('db.php');
if(isset($_POST['save'])){
    echo('conectado');
    $iden=$_POST['iden'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fechaNaci = $_POST['fechaNaci'];
    $papa = $_POST['papa'];

    echo('post correcto');

    $query = "INSERT INTO estudiante(id, nombre, fechaNacimiento, papa) VALUES ('$iden', '$nombre', '$fechaNaci', '$papa')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        $_SESSION['message'] = 'Error al guardar';
        $_SESSION['tipo_mensaje'] = 'danger';
        echo "Error al guardar";
        //die("Query Failed");
    }else{
        $_SESSION['message'] = 'Datos guardados';
        $_SESSION['tipo_mensaje'] = 'success';
        echo "Datos guardados";
    }
   
    
    header("Location: index.php");
}

?>