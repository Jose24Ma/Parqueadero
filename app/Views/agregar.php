<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agregar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container"><br> <br>
        <div class="container-fluid">
            <h1>Agregar</h1>
            <form action="insertar" method="POST">
                 <div class="form-group">
                    <label for="exampleInputEmail1">cedula</label>
                    <input type="number" class="form-control" id="cedula" name="cedula" required aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" required aria-describedby="emailHelp">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>

</body>

</html>