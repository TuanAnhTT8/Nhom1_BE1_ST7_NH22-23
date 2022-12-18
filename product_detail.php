<!-- HEADER-->
<?php include "header.php"; ?>
<!-- /HEADER-->
<?php if(isset($_GET['id'])){
    $id = $_GET['id'];
    $getProductById = $product->getProductById($id);
    var_dump($getProductById[0]['name']);
} ?>
<div style="z-index: 0; position: absolute; left: -839px; width: 2517px; height: 659px;"><div style="z-index: 900; position: absolute; width: 0px; height: 400px; left: 0px;"><canvas width="1" height="1" style="position: absolute; width: 0px; height: 400px;"></canvas></div><div style="z-index: 900; position: absolute; width: 839px; height: 659px; left: 0px;"><canvas width="1048" height="823" style="position: absolute; width: 839px; height: 659px;"></canvas></div><div style="z-index: 910; position: absolute; width: 839px; height: 659px; left: 839px;"><canvas width="1048" height="823" role="button" tabindex="0" aria-roledescription="zoomable image" aria-describedby="mixedmedia_zoomView_hint" style="position: absolute; width: 839px; height: 659px;"></canvas></div><div style="z-index: 920; position: absolute; width: 839px; height: 659px; left: 1678px;"><canvas width="1048" height="823" style="position: absolute; width: 839px; height: 659px;"></canvas></div></div>

<!-- FOOTER-->
<?php include "footer.php"; ?>
<!-- /FOOTER-->