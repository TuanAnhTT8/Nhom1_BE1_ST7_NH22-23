<?php
class Cart extends Db
{
    public function getAllCart()
    {
        $sql = self::$connection->prepare("SELECT * FROM cart");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getIdProductCart($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM cart WHERE id = ? ");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    // public function getProductbyID($id)
    // {
    //     $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `id` = ?");
    //     $sql->bind_param("i", $id);
    //     $sql->execute(); //return an object
    //     $items = array();
    //     $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    //     return $items; //return an array
    // }
    public function insertProductToCart($cid, $cname, $cprice, $cimg, $cqty)
    {
        $sql = self::$connection->prepare("INSERT INTO cart (id,product_name,product_price,product_img,qty) 
        VALUES(?,?,?,?,?)");
        $sql->bind_param("isisi", $cid, $cname, $cprice, $cimg, $cqty);
        $sql->execute(); //return an object
    }
    public function editQtyProductInCart($cid, $cqty)
    {
        $sql = self::$connection->prepare("UPDATE `cart` SET `id`=?,`qty`=?");
        $sql->bind_param("ii", $cid,  $cqty);
        return $sql->execute(); //return an object
    }
  
    public function delProductInCart($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `cart` WHERE id=?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
    }

    public function delAllProductInCart()
    {
        $sql = self::$connection->prepare("DELETE FROM `cart` ");
        $sql->bind_param();
        return $sql->execute(); //return an object
    }
}