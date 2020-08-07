<?php
    include './services/moduleService.php';
    $moduleService=new ModuleService();
    $result=$moduleService->findAllM();
    $res=$moduleService->findAllR();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Modulos</title>
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
                    <form name="registro" action="./rol.php" method="POST">
                        <div class="border p-4 form">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label id="lblCategoria" for="categoria">Rol</label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">

                                        <select style="color: #5D5C5C;" class="custom-select" id="rol" name="rol">
                                            <?php
                        if($res->num_rows>0){
                            while($row1 = $res->fetch_assoc()) {?>
                                            <option value="<?php echo $row1["COD_ROL"]?>">
                                                <?php echo $row1["NOMBRE"]?></option>
                                            <?php if(isset($_POST["aceptar"])){?>
                                            <option hidden selected>
                                                <?php echo $_POST['rol']?></option>
                                            <?php }} }?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label id="lblCategoria" for="categoria">Modulo</label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">

                                        <select style="color: #5D5C5C;" class="custom-select" id="modulo" name="modulo">
                                            <?php
                        if($result->num_rows>0){
                            while($row = $result->fetch_assoc()) {?>
                                            <option value="<?php echo $row["COD_MODULO"]?>">
                                                <?php echo $row["NOMBRE"]?></option>
                                            <?php if(isset($_POST["aceptar"])){?>
                                            <option hidden selected>
                                                <?php echo $_POST['rol']?></option>
                                            <?php }} }?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" style="justify-content: center;">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input  class="btn btn-info btn-block" type="submit" name="registrar"
                                        value="Aceptar">
                                </div>
                               
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