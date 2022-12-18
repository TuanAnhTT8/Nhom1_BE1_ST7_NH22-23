<!-- HEADER-->
<?php include "header.php"; ?>
<!-- /HEADER-->
<?php if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getProductById = $product->getProductById($id);
} ?>

<div class="container pb-5">
    <div class="row">
        <div class="col-lg-5 mt-5">
            <div class="mb-3">
                <img style="width: 100%" class="img-fluid" src="img/<?php echo $getProductById[0]['image'] ?>" />
            </div>
        </div>
        <!-- col end -->
        <div class="col-lg-7 mt-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="h2"><?php echo $getProductById[0]['name'] ?></h1>
                    <p class="h3 py-2"><?php echo number_format($getProductById[0]['price']) ?> <span>VND</span></p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6>Category:</h6>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted"><strong>CATE</strong></p>
                        </li>
                    </ul>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6>Manufacture:</h6>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted"><strong>Manu</strong></p>
                        </li>
                    </ul>

                    <h6>Description:</h6>
                    <p><?php echo $getProductById[0]['description'] ?></p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6>Avaliable Color :</h6>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted"><strong>White / Black</strong></p>
                        </li>
                    </ul>
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
</div>
<!-- FOOTER-->
<?php include "footer.php"; ?>
<!-- /FOOTER-->