<?php
if (isset($_GET['manu_id'])) {
    include "header.php";
} elseif (isset($_GET['type_id'])) {
    include "header.php";
} else {
    header("location: index.php");
}
?>
<!-- Section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <?php
            if (isset($_GET['manu_id'])) {
                foreach ($getAllManu as $value):
                    if ($value['manu_id'] == $_GET['manu_id']):
            ?>
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3 class="title">Products of
                        <?php echo $value['manu_name'] ?>
                    </h3>
                </div>
            </div>
            <?php
                    endif;
                endforeach;
            } elseif (isset($_GET['type_id'])) {
                foreach ($getAllType as $value):
                    if ($value['type_id'] == $_GET['type_id']): ?>
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3 class="title">Products of
                        <?php echo $value['type_name'] ?>
                    </h3>
                </div>
            </div>
            <?php
                    endif;
                endforeach;
            }
            ?>

            <!-- product -->
            <?php if (isset($_GET['manu_id'])) {
                $manu_id = $_GET['manu_id'];
                $getProductByManu = $manu->getProductByManu($manu_id);
                foreach ($getProductByManu as $value):
            ?>
            <div class="col-md-3 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="./img/<?php echo $value['image'] ?>" width="250" height="200" alt="">
                        <div class="product-label">
                        </div>
                    </div>
                    <div class="product-body">
                        <p class="product-category">
                            <?php echo $type->getNameType($value['type_id'])[0]['type_name'] ?>
                        </p>
                        <h3 class="product-name"><a
                                href="product_detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>">
                                <?php if (strlen($value['name']) > 10) {
                        echo substr($value['name'], 0, 20) . '...';
                    } else {
                        echo $value['name'];
                    } ?>
                            </a></h3>
                        <h4 class="product-price"><?php echo number_format($value['price']) ?> VND </h4>

                    </div>
                    <div class="add-to-cart">
                        <form class="form-submit" action="cart.php" method="">
                            <input type="hidden" class="url" name="url" value="<?php echo $_SERVER['SCRIPT_NAME'] . "?manu_id=" . $value['manu_id'] ?>">
                            <input type="hidden" class="cid" name="cid" value="<?php echo $value['id'] ?>">
                            <input type="hidden" class="cname" name="cname" value="<?php echo $value['name'] ?>">
                            <input type="hidden" class="cprice" name="cprice" value="<?php echo $value['price'] ?>">
                            <input type="hidden" class="cimg" name="cimg" value="<?php echo $value['image'] ?>">
                            <button class="add-to-cart-btn addItemBtn" type="submit" name="submit"><i
                                    class="fa fa-shopping-cart"></i>add to cart</button>
                        </form>
                    </div>
                </div>
            </div>

            <?php endforeach;
            } elseif (isset($_GET['type_id'])) {
                $type_id = $_GET['type_id'];
                $getProductByType = $type->getProductByType($type_id);
                foreach ($getProductByType as $value):
            ?>
            <div class="col-md-3 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="./img/<?php echo $value['image'] ?>" width="250" height="200" alt="">
                        <div class="product-label">
                        </div>
                    </div>
                    <div class="product-body">
                        <p class="product-category">
                            <?php echo $type->getNameType($value['type_id'])[0]['type_name'] ?>
                        </p>
                        <h3 class="product-name"><a
                                href="product_detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>">
                                <?php if (strlen($value['name']) > 10) {
                        echo substr($value['name'], 0, 20) . '...';
                    } else {
                        echo $value['name'];
                    } ?>
                            </a></h3>
                        <h4 class="product-price"><?php echo number_format($value['price']) ?> VND </h4>

                    </div>
                    <div class="add-to-cart">
                        <form class="form-submit" action="cart.php" method="">
                        <input type="hidden" class="url" name="url" value="<?php echo $_SERVER['SCRIPT_NAME'] . "?type_id=" . $value['type_id'] ?>">
                            <input type="hidden" class="cid" name="cid" value="<?php echo $value['id'] ?>">
                            <input type="hidden" class="cname" name="cname" value="<?php echo $value['name'] ?>">
                            <input type="hidden" class="cprice" name="cprice" value="<?php echo $value['price'] ?>">
                            <input type="hidden" class="cimg" name="cimg" value="<?php echo $value['image'] ?>">
                            <button class="add-to-cart-btn addItemBtn" type="submit" name="submit"><i
                                    class="fa fa-shopping-cart"></i>add to cart</button>
                        </form>
                    </div>
                </div>
            </div>

            <?php endforeach;
            } ?>
            <!-- /product -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->
</div>
<!-- /Section -->

<?php include "footer.php"; ?>