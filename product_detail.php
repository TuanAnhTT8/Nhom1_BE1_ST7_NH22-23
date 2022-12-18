<!-- HEADER-->
<?php include "header.php"; ?>
<!-- /HEADER-->
<?php if(isset($_GET['id'])){
    $id = $_GET['id'];
    $getProductById = $product->getProductById($id);
    var_dump($getProductById[0]['name']);
} ?>
<!-- FOOTER-->
<?php include "footer.php"; ?>
<!-- /FOOTER-->