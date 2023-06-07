<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container"><br> <br>
        <div class="container-fluid">
            <h1>Actualizar</h1>
            <form action="<?= base_url('factualizar'); ?>" method="POST">
                <div class="form-group">
                    <input type="number" hidden name="id" value="<?= $persona['id'] ?>">
                    <label for="exampleInputEmail1">nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $persona['nombre'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $persona['apellido'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">sexo</label>
                    <input type="text" class="form-control" id="sexo" name="sexo" value="<?= $persona['sexo'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">edad</label>
                    <input type="number" class="form-control" id="edad" name="edad" value="<?= $persona['edad'] ?>" required aria-describedby="emailHelp">

                </div><br>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>

</body>

</html>