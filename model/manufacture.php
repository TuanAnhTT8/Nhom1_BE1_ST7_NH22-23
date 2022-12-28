<?php 
class Manufacture extends Db{
    public function getAllManufactures()
    {
        $sql = self::$connection->prepare("SELECT * FROM manufacture");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function getProductByManu($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id = ?");
        $sql->bind_param("i", $manu_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    
    
    public function get5ProductByManu($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `manu_id` = ? LIMIT 5");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}