<?php
class Product extends Db
{
    public function addProduct($name,$manu_id,$type_id,$price,$image,$des,$feature)
    {
        $sql = self::$connection->prepare("INSERT INTO `products`(`name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`) VALUES (?,?,?,?,?,?,?)");
        $sql->bind_param("siiissi",$name,$manu_id,$type_id,$price,$image,$des,$feature); //return an object
        return $sql->execute(); //return an array
    }
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products, manufacture, protypes 
                                            WHERE products.manu_id = manufacture.manu_id AND products.type_id = protypes.type_id ORDER BY `id` DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function get5NewestProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products ORDER BY created_at DESC LIMIT 0,5;");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function getNameType($typeID)
    {
        $sql = self::$connection->prepare("SELECT `type_name` FROM protypes WHERE `type_id` = ?");
        $sql->bind_param("i", $typeID);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function search($type, $keyword)
    {
        $keyword = "'%$keyword%'";
        if ($type != 0) {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE `type_name` LIKE $keyword AND `type_id`= ?");
            $sql->bind_param("s", $type);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        } else {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE `type_name` LIKE $keyword");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
    }
}