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
</body>
<nav class= "navbar navbar-dark bg-dark">
    <div class="container">
        <a href="index.php">Crud con php </a>
</div>
</nav>
<div class="container w-50">
    <div class="col-md-4">
    <form action="guardar.php" method="post">
        <div class="mb-3">
            <label for="iden" class="form-label">Identificacion
                <input type="number" name="id" id="id" class="form-control" required  >
            </label>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">nombre
                <input type="text" name="" id="nombre" class="form-control" required  >
            </label>
        </div>
        <div class="mb-3">
            <label for="nacimiento" class="form-label">fecha Nacimiento
                <input type="date" name="fechaNac" id="fechaNac" class="form-control" required  >
            </label>
        </div>
        <div class="mb-3">
            <label for="papa" class="form-label">papa
                <input type="number" name="papa" id="papa" class="form-control" required  >
            </label>
        </div>
        <div>
            <input type="submit" value="guardar" class="btn btn-success btn-block" name="save" >
        </div>
    </form>
    </div>

</div>

</html>