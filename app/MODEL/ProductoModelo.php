<?php
class ModeloProducto {
    private $dbconn;

    public function __construct() {
        require_once('../CONFIG/variablesConexion.php');
        $this->dbconn = new Conexion();
    }

    public function verProductos() {
        $sql = 'SELECT * FROM producto';
        $connection = $this->dbconn->getConnection();
        $result = $connection->query($sql);
        $productos = array();
        while ($producto = $result->fetch_assoc()) {
            $productos[] = $producto;
        }
        $this->dbconn->closeConnection();
        return $productos;
    }

    public function eliminarProducto($id) {
        $sql = "DELETE FROM producto WHERE idproducto=$id";
        $connection = $this->dbconn->getConnection();
        $result = $connection->query($sql);
        $res = $result ? true : false;
        $this->dbconn->closeConnection();
        return $res;
    }

    public function buscarProducto($nombre) {
        $sql = "SELECT * FROM producto WHERE nombre LIKE '%$nombre%'";
        $connection = $this->dbconn->getConnection();
        $result = $connection->query($sql);
        $productos = array();
        while ($producto = $result->fetch_assoc()) {
            $productos[] = $producto;
        }
        $this->dbconn->closeConnection();
        return $productos;
    }
}
