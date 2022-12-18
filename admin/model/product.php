<?php
class Product extends Db
{
    public function editProduct($name, $manu_id, $type_id, $price, $image, $des, $feature,$id)
    {
        if($image == ""){
            $sql = self::$connection->prepare("UPDATE `products` SET `name`=?,`manu_id`=?,`type_id`=?,`price`=?,`description`=?,`feature`=? WHERE `id`=?");
            $sql->bind_param("siiisii",$name, $manu_id, $type_id, $price, $des, $feature, $id);
        }else{
            $sql = self::$connection->prepare("UPDATE `products` SET `name`=?,`manu_id`=?,`type_id`=?,`price`=?,`image`=?,`description`=?,`feature`=? WHERE `id`=?");
            $sql->bind_param("siiissii",$name, $manu_id, $type_id, $price, $image, $des, $feature,$id);
        }
        
        return $sql->execute(); //return an object
    }

    public function delProduct($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE id=?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
    }

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

    public function getProductbyID($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `id` = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}