<?php

include './services/moduleService.php';
$codigo = "";
$nombre = "";
$estado = "";
$accion = "Agregar";

$moduleService = new ModuleService();
if (isset($_POST["accion"]) && isset($_POST["registrar"])) {
    $moduleService->insert($_POST["codmodulo"], $_POST["nombre"], $_POST["estado"]);
} else if (isset($_POST["accion"]) && isset($_POST["modificar"])) {
    $moduleService->update($_POST["nombre"], $_POST["estado"], $_POST["codmodulo"]);
} else if (isset($_GET["delete"])) {
    $moduleService->delete($_GET["delete"]);
} else if (isset($_GET["update"])) {
    $row1 = $moduleService->findByPK($_GET["update"]);
    if ($row1 != null) {
        $codigo = $row1["COD_MODULO"];
        $nombre = $row1["NOMBRE"];
        $estado = $row1["ESTADO"];
        $accion = "Modificar";
    }
}

$result = $moduleService->findAll();
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
    <!-- Page plugins -->
    <!-- Argon CSS -->

</head>

<body>
    <!-- Sidenav -->
    <?php include("../views/partials/menu.php"); ?>
    <div class="main-content" id="panel">


        <div class="py-4"></div>
        <div class="col">
            <div class="card">
                <div class="card-header border-0" style="text-align: center;">
                    <h3 class="mb-0">GESTIÓN DE MÓDULOS</h3>
                </div>
                <div class="table-responsive">
                    <table border="1" class="table" style=" font-family: Arial; width:1000px" align="center">

                        <thead class="" style="background-color:#17a2b8" style="color: blue;">
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Estado</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <tbody class="list">
                                    <tr>
                                        <td><?php echo $row["COD_MODULO"] ?></td>
                                        <td><?php echo $row["NOMBRE"] ?></td>
                                        <td><?php echo $row["ESTADO"] ?></td>
                                        <td>
                                            <a href="modulo.php?update='<?php echo $row["COD_MODULO"] ?>'" title="Editar datos" class="btn btn-primary btn-sm">EDITAR<span class="far fa-edit fa-lg" aria-hidden="true"></span></a>
                                            <a href="modulo.php?delete='<?php echo $row["COD_MODULO"] ?>'" title="Eliminar" class="btn btn-danger btn-sm">ELIMINAR<span class="far fa-trash-alt fa-lg" aria-hidden="true"></span></a>
                                        </td>
                                    </tr>
                                <?php }
                        } else { ?>
                                <tr>
                                    <td colspan="4">No hay datos</td>
                                </tr>
                            <?php } ?>
                                </tbody>
                    </table>
                </div>

            </div>
            <div class="py-2"></div>
            <div class="form-group row" style="justify-content: center;">
                <div class="col-sm-2">

                </div>


            </div>
            <div style="display: flex;align-items: center;justify-content: center;">
                <div class="abs-center">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <form name="registro" action="./modulo.php" method="POST">
                            <div class="border p-4 form">
                                <div class="form-group row">
                                    <div class="col-sm-8">
                                        <input type="hidden" name="codmodulo" class="form-control" value="<?php echo $codigo ?>">
                                    </div>
                                    <div class="col-sm-30">
                                        <input type="text" style="color: #5D5C5C;" name="codmodulo" required class="form-control" placeholder="CÓDIGO" value="<?php echo $codigo; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <div class="col-sm-30">
                                        <input type="text" style="color: #5D5C5C;" name="nombre" required class="form-control" placeholder="NOMBRE" placeholder="Leche" value="<?php echo $nombre; ?>">

                                    </div>
                                </div>
                                <div class="form-group row">

                                    <div class="col-sm-30">
                                        <div class="input-group mb-3">
                                            <select style="color: #5D5C5C;" class="custom-select" id="estado" name="estado">
                                                <option hidden selected><?php echo $estado; ?></option>
                                                <option value="ACT">Activo</option>
                                                <option value="INA">Inactivo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" style="justify-content: center;">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="btn btn-info btn-block" type="submit" name="accion" value="<?php echo $accion ?>">
                                </div>


                            </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <?php include("../views/partials/footer.php"); ?>
</body>

</html>