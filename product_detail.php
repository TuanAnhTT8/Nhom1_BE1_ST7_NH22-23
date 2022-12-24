<!-- HEADER-->
<?php include "header.php"; ?>
<!-- /HEADER-->
<?php if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getProductById = $product->getProductById($id);
} ?>

<div class="container">
    <div id="responsive-nav">
        <!-- NAV -->
        <ul class="main-nav nav navbar-nav product-path">
            <li><p><strong>Home</strong></p></li>
            <li><p><span>/</span> <strong><?php echo $getProductById[0]['type_name'] ?></strong></p></li>
            <li><p><span>/</span> <strong><?php echo $getProductById[0]['name'] ?></strong></p></li>
        </ul>
        <!-- /NAV -->
    </div>
    <div class="row" style="padding: 30px 0px">
        <div class="col-lg-7 mt-5">
            <div class="mb-3">
                <img style="width: 100%" class="img-fluid" src="img/<?php echo $getProductById[0]['image'] ?>" />
            </div>
        </div>
        <!-- col end -->
        <div class="col-lg-5 mt-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="h2 pro-name"><?php echo $getProductById[0]['name'] ?></h1>
                    <p class="h3 py-2 price"><?php echo number_format($getProductById[0]['price']) ?> <span>VND</span></p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6>Category:</h6>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted"><strong><?php echo $getProductById[0]['type_name'] ?></strong></p>
                        </li>
                    </ul>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6>Manufacture:</h6>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted"><strong><?php echo $getProductById[0]['manu_name'] ?></strong></p>
                        </li>
                    </ul>

                    <h6>Description:</h6>
                    <p><?php echo $getProductById[0]['description'] ?></p>
                    <form action="" method="POST">
                        <div class="row pb-3">
                            <div class="add-to-cart col-lg-6 d-grid">
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> buy</button>
                            </div>
                            <div class="add-to-cart col-lg-6 d-grid">
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- section title -->
        <div class="col-md-12">
            <div class="section-title">
                <h3 class="title">Other <?php echo $getProductById[0]['type_name'] ?> Products</h3>
            </div>
        </div>
        <!-- /section title -->


        <!-- Products tab & slick -->
        <div class="col-md-12">
            <div class="row">
                <div class="products-tabs">
                    <!-- tab -->
                    <div id="tab1" class="tab-pane active">
                        <div class="products-slick" data-nav="#slick-nav-1">

                            <?php
                            $get5ProductByType = $type->get5ProductByType($getProductById[0]['type_id']);
                            foreach ($get5ProductByType as $value) :
                            ?>
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/<?php echo $value['image'] ?>"  width="250" height="200" alt="">
                                    </div>
                                    <div class="product-body">

                                        <h3 class="product-name"><a href="product_detail.php?id=<?php echo $value['id'] ?>"><?php echo substr($value['name'], 0, 20) ?>...</a></h3>
                                        <h4 class="product-price"><?php echo number_format($value["price"]) ?> VND</h4>
                                        
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div>
                                <!-- /product -->
                            <?php
                            endforeach;
                            ?>

                        </div>

                    </div>
                    <!-- /tab -->
                </div>
            </div>
        </div>
        <!-- Products tab & slick -->

    </div>
    <div class="row">

        <!-- section title -->
        <div class="col-md-12">
            <div class="section-title">
                <h3 class="title">Other <?php echo $getProductById[0]['manu_name'] ?> Products</h3>
            </div>
        </div>
        <!-- /section title -->


        <!-- Products tab & slick -->
        <div class="col-md-12">
            <div class="row">
                <div class="products-tabs">
                    <!-- tab -->
                    <div id="tab1" class="tab-pane active">
                        <div class="products-slick" data-nav="#slick-nav-2">

                            <?php
                            $get5ProductByType = $type->get5ProductByType($getProductById[0]['manu_id']);
                            foreach ($get5ProductByType as $value) :
                            ?>
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/<?php echo $value['image'] ?>"  width="250" height="200" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="product_detail.php?id=<?php echo $value['id'] ?>"><?php echo substr($value['name'], 0, 20) ?>...</a></h3>
                                        <h4 class="product-price"><?php echo number_format($value["price"]) ?> VND</h4>
                                        
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                                </div>
                                <!-- /product -->
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                    <!-- /tab -->
                </div>
            </div>
        </div>
        <!-- Products tab & slick -->

    </div>
</div>
<!-- FOOTER-->
<?php include "footer.php"; ?>
<!-- /FOOTER-->