<?php
class Product extends Db
{
    public function get6ProductsSearch($keyword, $currentpage, $limit){
        $firstLink = ($currentpage - 1) * $limit;
        $keyword = "'%$keyword%'";

        $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE $keyword LIMIT ?,?");
                $sql->bind_param("ii", $firstLink, $limit);
                $sql->execute(); //return an object
                $items = array();
                $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
                return $items; //return an array
    }
    function paginate($currentpage, $url, $totalrecords, $limit)
    {
        $totalpages = ceil($totalrecords / $limit);
        $page = "";

        for ($j = 1; $j <= $totalpages; $j++) {
            if ($j == $currentpage){
                $page = $page . "<li class='active'>$j</li>";
            }
            else{
                $page = $page . "<li><a href='$url&page=$j'> $j </a></li>";
            }
        }
        return $page;
    }
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

    public function getNameType($typeID)
    {
        $sql = self::$connection->prepare("SELECT `type_name` FROM protypes WHERE `type_id` = ?");
        $sql->bind_param("i", $typeID);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function search($keyword)
    {
        $keyword = "'%$keyword%'";
            $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE $keyword");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        
    }
}