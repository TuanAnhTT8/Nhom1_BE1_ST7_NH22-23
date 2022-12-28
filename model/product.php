<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products, manufacture, protypes 
                                            WHERE products.manu_id = manufacture.manu_id AND products.type_id = protypes.type_id");
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

    public function search($keyword)
    {
        $keyword = "'%$keyword%'";
            $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `name` LIKE $keyword");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        
    }
    
    public function getProductById($id)
    {
        $sql = self::$connection->prepare("SELECT `id`, `products`.`manu_id`, `products`.`type_id`, `name`, `manu_name`, `type_name`, `price`, `image`, `description`, `feature`, `created_at` FROM `products`,`manufacture`,`protypes` WHERE `id`= ? AND `manufacture`.`manu_id` = `products`.`manu_id` AND `protypes`.`type_id` = `products`.`type_id`");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    

}