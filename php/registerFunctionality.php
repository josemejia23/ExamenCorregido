<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Modulos</title>
    <!-- Favicon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- Sidenav -->
    <?php include("../views/partials/menu.php");?>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <div class="main-content" id="panel">
            <!-- Header -->
            
        </div>
        <div class="py-4"></div>
        <div style="display: flex;align-items: center;justify-content: center;">
            <div class="abs-center">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <form name="registro" action="./funcionalidades.php" method="POST">
                        <div class="border p-4 form">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label id="lblDescripcion" for="descripcion">Código funcionalidad</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" style="color: #5D5C5C;" name="codfuncionalidad" required
                                        class="form-control" placeholder="001" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label id="lblDescripcion" for="descripcion">Código modulo</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" style="color: #5D5C5C;" name="codmodulo" required
                                        class="form-control" placeholder="001" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label id="lblDescripcion" for="descripcion">URL</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" style="color: #5D5C5C;" name="url" required class="form-control"
                                        placeholder="" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label id="lblDescripcion" for="descripcion">Nombre</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" style="color: #5D5C5C;" name="nombre" required
                                        class="form-control" placeholder="" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label id="lblDescripcion" for="descripcion">Descripcion</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" style="color: #5D5C5C;" name="descripcion" required
                                        class="form-control" placeholder="" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row" style="justify-content: center;">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input class="btn btn-info btn-block" type="submit" name="registrar"
                                    value="Nuevo">
                            </div>
                            

                        </div>

                </div>
                </form>
            </div>
        </div>
    </div>

    </div>
    <?php include("../views/partials/footer.php");?>
</body>

</html>