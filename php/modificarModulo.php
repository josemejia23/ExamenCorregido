<?php
    include './services/moduleService.php';
    $moduleService=new ModuleService();
    if(isset($_GET["update"])){
      $row1=$moduleService->findByPK($_GET["update"]);
      if($row1!=null){
          $codigo=$row1["COD_MODULO"];
          $descripcion=$row1["NOMBRE"];
          $categoria=$row1["ESTADO"];
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
    <link rel="icon" href="../assets/img/product.png" type="image/png">
    <!-- Fonts -->
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
            <!-- Header -->

        </div>
        <div class="py-4"></div>
        <div style="display: flex;align-items: center;justify-content: center;">
            <div class="abs-center">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <form name="registro" action="./modulo.php" method="POST">
                        <div class="border p-4 form">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label id="lblCodigo" for="codigo">Código</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" style="color: #5D5C5C;" name="codmodulo" class="form-control"
                                        disabled value="<?php echo $row1["COD_MODULO"]?>">
                                </div>
                                <div class="col-sm-8">
                                    <input type="hidden" name="codmodulo" class="form-control"
                                        value="<?php echo $row1["COD_MODULO"]?>">
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
                                    <label id="lblCategoria" for="categoria">Categoría</label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <select style="color: #5D5C5C;" class="custom-select" id="estado" name="estado">
                                            <option hidden selected><?php echo $row1["ESTADO"];?></option>
                                            <option value="ACT">Activo</option>
                                            <option value="INA">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row" style="justify-content: center;">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="btn btn-info btn-block" name="modificar" type="submit"
                                        value="Modificar">
                                </div>
                                <div class="col-sm-2">
                                   
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