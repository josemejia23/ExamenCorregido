<?php
    include './services/moduleService.php';
    $moduleService=new ModuleService();
    $result=$moduleService->findAllR();
    if(isset($_GET["delete"])){
        $moduleService->deleteR($_GET["delete"]);
    }else if(isset($_POST["registrar"])){
        $moduleService->insertR($_POST["rol"], $_POST["modulo"]); 
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
    <?php include("../views/partials/menu.php");?>
    <div class="main-content" id="panel">

        <div class="main-content" id="panel">
            <!-- Header -->
           
        </div>
        <div class="py-4"></div>
        <form name="rol" action="rol.php" method="POST">
            <div class="col">
                <div class="form-group row" style="justify-content: center;">

                    <div class="py-2">
                        <label id="lblCategoria" for="categoria">ROL</label>
                    </div>
                    <div class="col-sm-2">
                        <div class="input-group mb-3">

                            <select style="color: #5D5C5C;" class="custom-select" id="rol" name="rol">
                                <?php
                        if($result->num_rows>0){
                            while($row = $result->fetch_assoc()) {?>
                                <option value="<?php echo $row["COD_ROL"]?>">
                                    <?php echo $row["COD_ROL"]?></option>
                                <?php if(isset($_POST["aceptar"])){?>
                                <option hidden selected>
                                    <?php echo $_POST['rol']?></option>
                                <?php }} }?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <input class="btn btn-info btn-block" name="aceptar" type="submit" value="Aceptar">
                    </div>
                </div>
                <div class="card">

                    <div class="card-header border-0" style="text-align: center;">
                        <h3 class="mb-0">MÓDULOS-ROL</h3>
                    </div>
                    <div class="table-responsive">
                <table border="1" class="table" style=" font-family: Arial; width:1000px; text-align:center" align="center">

                <thead class="" style="background-color:#17a2b8" style="color: blue; text-align:center">
                                <tr>
                                    <th scope="col" >Módulos</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <?php
                            if(isset($_POST["aceptar"])){
                                $res=$moduleService->findAllRMA($_POST['rol']);
                            
                                if($res->num_rows>0){
                                    while($row1 = $res->fetch_assoc()) {
                            ?>
                            <tbody class="list">
                                <tr>
                                    <td><?php echo $row1["NOMBRE"]?></td>
                                    <td>
                                        <a href="rol.php?delete='<?php echo $row1["COD_ROL"]?>'" title="Eliminar"
                                            class="btn btn-danger btn-sm">ELIMINAR<span class="far fa-trash-alt fa-lg"
                                                aria-hidden="true"></span></a>
                                    </td>
                                </tr>

                                <?php }
                                } }else{ ?>
                                <tr>
                                    <td colspan="4">No hay datos</td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="py-2"></div>
                <div class="form-group row" style="justify-content: center;">
                    <div class="col-sm-2">
                        <a href="/ExamenCorregido/php/registerRol.php"
                        class="btn btn-info btn-block">
                            Nuevo
                        </a>
                    </div>
                   

                </div>
            </div>
        </form>


    </div>
    </form>

    <!-- Argon Scripts -->
    <!-- Core -->
    <?php include("../views/partials/footer.php");?>
</body>

</html>