<?php
    include './services/moduleService.php';
    $moduleService=new ModuleService();
    if(isset($_GET["update"])){
      $row1=$moduleService->findByPKF($_GET["update"]);
      if($row1!=null){
        $codigo=$row1["COD_FUNCIONALIDAD"];
          $codigo=$row1["COD_MODULO"];
          $url=$row1["URL_PRINCIPAL"];
          $nombre=$row1["NOMBRE"];
          $descripcion=$row1["DESCRIPCION"];
      }
    }

?>
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
        <!-- Header -->
        <!-- Header -->
        <div class="main-content" id="panel">
           
        </div>
        <div class="py-4"></div>
        <div style="display: flex;align-items: center;justify-content: center;">
            <div class="abs-center">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <form name="registro" action="./funcionalidades.php" method="POST">
                        <div class="border p-4 form">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label id="lblCodigo" for="codigo">Código Funcionalidad</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" style="color: #5D5C5C;" name="codfuncionalidad"
                                        class="form-control" disabled value="<?php echo $row1["COD_FUNCIONALIDAD"]?>">
                                </div>
                                <div class="col-sm-8">
                                    <input type="hidden" name="codfuncionalidad" class="form-control"
                                        value="<?php echo $row1["COD_FUNCIONALIDAD"]?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label id="lblDescripcion" for="descripcion">Codigo Modulo</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" style="color: #5D5C5C;" name="codmodulo" class="form-control"
                                        placeholder="Leche" value="<?php echo $row1["COD_MODULO"]?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label id="lblDescripcion" for="descripcion">URL</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" style="color: #5D5C5C;" name="url" class="form-control"
                                        placeholder="Leche" value="<?php echo $row1["URL_PRINCIPAL"]?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label id="lblDescripcion" for="descripcion">Nombre</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" style="color: #5D5C5C;" name="nombre" class="form-control"
                                        placeholder="Leche" value="<?php echo $row1["NOMBRE"]?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label id="lblDescripcion" for="descripcion">Descripcion</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" style="color: #5D5C5C;" name="descripcion" class="form-control"
                                        placeholder="Leche" value="<?php echo $row1["DESCRIPCION"]?>">
                                </div>
                            </div>

                            <div class="form-group row" style="justify-content: center;">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="btn btn-info btn-block" name="modificar" type="submit"
                                        value="Modificar">
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