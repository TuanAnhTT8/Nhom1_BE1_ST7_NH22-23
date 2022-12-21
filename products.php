<?php
if (isset($_GET['manu_id'])) {
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
            foreach ($getAllManu as $value) {
                if ($value['manu_id'] == $_GET['manu_id']) { ?>
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3 class="title">Products of
                        <?php echo $value['manu_name'] ?>
                    </h3>
                </div>
            </div>
            <?php
                }
            }
            ?>

            <!-- product -->
            <?php if (isset($_GET['manu_id'])):
                $manu_id = $_GET['manu_id'];
                $getProductByManu = $product->getProductByManu($manu_id);
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
                            <?php echo $product->getNameType($value['type_id'])[0]['type_name'] ?>
                        </p>
                        <h3 class="product-name"><a
                                href="product_detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>">
                                <?php if (strlen($value['name']) > 10) {
                        echo substr($value['name'], 0, 20) . '...';
                    } else {
                        echo $value['name'];
                    } ?>
                            </a></h3>
                        <h4 class="product-price">$
                            <?php echo number_format($value['price']) ?>
                        </h4>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <form class="form-submit" action="action.php" method="">
                            <button class="add-to-cart-btn addItemBtn" type="submit" name="submit"><i
                                    class="fa fa-shopping-cart"></i>add to cart</button>
                        </form>
                    </div>
                </div>
            </div>

            <?php endforeach;
            endif; ?>
            <!-- /product -->

        </div>
        <!-- /row -->
        
    </div>
    <!-- /container -->
</div>
<!-- /Section -->

<?php include "footer.php"; ?>