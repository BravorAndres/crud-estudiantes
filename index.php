<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>crud con phpt</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a href="index.php">Crud con php </a>
    </div>
  </nav>
  <div class="container w-50">
    <div class="row">
      <div class="col-md-4">
        <?php if (isset($_SESSION['mensaje'])) {?>
        <div class="alert alerrt-<?= $_SESSION['tipo_mensaje']; ?>alert-desmissible fade-show" role="alert">
          <?php echo $_SESSION['mensaje'];?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php session_unset(); }?>
        <div class="card card-body">
          <form action="guardar.php" method="POST">
            <div class="mb-3">
              <label for="iden" class="form-label">Identificacion
                <input type="text" name="iden" id="iden" class="form-control" required>
              </label>
              </div">
              <div class="mb-3">
                <label for="nombre" class="form-label">nombre
                  <input type="text" name="nombre" id="nombre" class="form-control" required>
                </label>
                <div class="mb-3">
                <label for="apellido" class="form-label">apellido
                  <input type="text" name="apellido" id="apellido" class="form-control" required>
                </label>
              </div>
              <div class="mb-3">
                <label for="fechaNaci" class="form-label">fecha Nacimiento
                  <input type="date" name="fechaNaci" id="fechaNaci" class="form-control" required>
                </label>
              </div>
              <div class="mb-3">
                <label for="papa" class="form-label">P.A.P.A
                  <input type="number" name="papa" id="papa" class="form-control" required onchange="verificar()">
                </label>
              </div>
              <div>
                <input type="submit" value="guardar" id="boton1" class="btn btn-success btn-block" name="save">
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>

  <div class="col-md-8">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Identificacion</th>
                <th>Nombre</th>
                <th>Fecha Nacimiento</th>
                <th>P.A.P.A</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = "SELECT * FROM estudiante";
              $result = mysqli_query($conn, $query);
              while ($row = mysqli_fetch_array($result)) { ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['fechaNacimiento']; ?></td>
                <td><?php echo $row['papa']; ?></td>
                <td>
                  <a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">
                    <i class="fas fa-marker"></i>
                  </a>
                  <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                  </a>
                  
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>    
  </div>
  <script src="validar.js"></script>
</body>

</html>