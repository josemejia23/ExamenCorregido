<?php
include 'mainService.php';
class ModuleService extends MainService{
    private $entityName = "seg_modulo";
    function insert($codmodulo, $nombre, $estado){
        $stmt = $this->conex->prepare("INSERT INTO seg_modulo (COD_MODULO, NOMBRE, ESTADO) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $codmodulo, $nombre, $estado);
        $stmt->execute();
        $stmt->close();
    }
    function insertF($codfuncionalidad, $cod_modulo, $url,$nombre,$descripcion){
        $stmt = $this->conex->prepare("INSERT INTO seg_funcionalidad (COD_FUNCIONALIDAD,COD_MODULO,URL_PRINCIPAL,NOMBRE,DESCRIPCION) VALUES (?, ?, ?,?,?)");
        $stmt->bind_param("sssss", $codfuncionalidad, $cod_modulo, $url,$nombre,$descripcion);
        $stmt->execute();
        $stmt->close();
    }
    function insertR($codrol,$codmodulo){
        $stmt = $this->conex->prepare("INSERT INTO rol_modulo (COD_ROL,COD_MODULO) VALUES (?, ?)");
        $stmt->bind_param("ss", $codrol,$codmodulo);
        $stmt->execute();
        $stmt->close();
    }
    function findAll() {
        $result= $this->conex->query("SELECT * FROM seg_modulo WHERE ESTADO='ACT'");
        return $result;
    }
    function findAllM() {
        $result= $this->conex->query("SELECT * FROM seg_modulo");
        return $result;
    }
    function findAllF() {
        $result= $this->conex->query("SELECT * FROM seg_funcionalidad");
        return $result;
    }
    function findAllR() {
        $result= $this->conex->query("SELECT * FROM seg_rol");
        
        return $result;
    }
    function findAllRM() {
        $res= $this->conex->query("SELECT * from rol_modulo r, seg_modulo s where r.COD_MODULO=s.COD_MODULO");
        return $res;
    }
    function findAllRMA($codigoRol) {
        $result= $this->conex->query("SELECT * from rol_modulo r, seg_modulo s WHERE r.COD_MODULO=s.COD_MODULO AND r.COD_ROL ='$codigoRol' ");
        return $result;
    }
    function findByPK($codModulo) {
        $result = $this->conex->query("SELECT * FROM seg_modulo WHERE COD_MODULO=".$codModulo);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
    function findByPKF($codigo) {
        $result = $this->conex->query("SELECT * FROM seg_funcionalidad WHERE COD_FUNCIONALIDAD=".$codigo);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
    function update($nombre, $estado, $codModulo) {
        $stmt = $this->conex->prepare("UPDATE seg_modulo set NOMBRE=?, ESTADO=? WHERE COD_MODULO= ?");
        $stmt->bind_param("sss", $nombre, $estado, $codModulo);
        $stmt->execute();
        $stmt->close();
    }
    function updateF($codmodulo, $url, $nombre, $descipcion, $codfuncionalidad) {
        $stmt = $this->conex->prepare("UPDATE seg_funcionalidad set COD_MODULO=?, URL_PRINCIPAL=?,NOMBRE=?,DESCRIPCION=? WHERE COD_FUNCIONALIDAD= ?");
        $stmt->bind_param("sssss", $codmodulo, $url, $nombre, $descipcion, $codfuncionalidad);
        $stmt->execute();
        $stmt->close();
    }
    function delete($codModulo) {
        $estado='INA';
        $stmt=$this->conex->prepare("UPDATE seg_modulo set ESTADO='INA' WHERE COD_MODULO=".$codModulo);
        //$stmt->bind_param('ss', $estado, $codModulo);
        $stmt->execute();
        $stmt->close();
    }
    
    function deleteF($codigo) {
        $stmt=$this->conex->prepare('DELETE FROM seg_funcionalidad WHERE COD_FUNCIONALIDAD= '.$codigo.'');
        //$stmt->bind_param('i', $codProducto);
        $stmt->execute();
        $stmt->close();
    }
    function deleteR($codRol) {
        $stmt=$this->conex->prepare('DELETE FROM rol_modulo WHERE COD_ROL= '.$codRol.'');
        $stmt->execute();
        $stmt->close();
    }
    function findByPKFun($nombre) {
        $res = $this->conex->query("SELECT * FROM seg_funcionalidad s, seg_modulo m where s.COD_MODULO=m.COD_MODULO and m.NOMBRE=".$nombre);
        return $res;
    }
}
?>