<?php
class modelousario{
    private $dbconn;

    public function __construct(){
        require_once('../CONFIG/variablesConexion.php');
        $this->dbconn = new conexion();
    }

public function getAll(){
    $sql='SELECT * FROM usuarios';
    $connection=$this->dbconn->getConnection();
    $result=$connection->query($sql);
    $usuario=array();
    while($usuario=$result->fetch_assoc()){
        $usuario[]=$usuario;
    }
    $this->dbconn->closeConnection();
    return $usuario;
}
public function getById($id){
    $sql="SELECT * FROM usuario WHERE idcliente=$id";
    $conn=$this->dbconn->getConnection();
    $reslt=$conn->query($sql);
    if($reslt && $reslt->num_rows > 0){
        $usuario=$reslt->fetch_assoc();
    }else{
        $usuario=false;
    }
    $this->dbconn->closeConnection();
    return $usuario;
}
public function getCredentials($us, $ps){
    $sql="SELECT * FROM usuario WHERE usuario=$us AND contraseña=$ps";
    $conn =$this->dbconn->getConnection();
    $reslt = $conn->query($sql);
    if($reslt && $reslt->num_rows > 0){
        $usuario=$reslt->fetch_assoc();
    }else{
        $usuario=false;
    }
    $this->dbconn->closeConnection();
    return $usuario;
}
public function deleteRow($id){
    $sql="DELETE FROM usuario WHERE idcliente=$id";
    $conn =$this->dbconn->getConnection();
    $reslt = $conn->query($sql);
    if($reslt){
        $res=true;
    }else{
        $res=false;
    }
    $this->dbconn->closeConnection();
    return $res;
}


public function insertuser($usuario){
    $sql="INSERT INTO usuarios (nombre, apelllidop, apellidom, telefono, correo, usuario, contraseña) 
    VALUES('".$usuario['nombre']."', '".$usuario['app']."','".$usuario['apm']."','".$usuario['Tel']."',
    '".$usuario['email']."','".$usuario['usuario']."','".$usuario['pass']."')";
    $conn =$this->dbconn->getConnection();
    $reslt = $conn->query($sql);
    if($reslt){
        $res=true;
    }else{
        $res=false;
    }
    $this->dbconn->closeConnection();
    return $res;
}
public function updateuser($id, $user){
    $username = $user['usuario'];
    $email = $user['correo'];
    $password = $user['contraseña'];

    $sql="UPDATE usuario SET usuario='$username', correo='$email', contraseña='$password' WHERE idcliente=$id";
    $connection =$this->dbconn->getConnection();
    $reslt = $connection->query($sql);
    if($reslt){
        $res=true;
    }else{
        $res=false;
    }
    $this->dbconn->closeConnection();
    return $res;
}










}
?>