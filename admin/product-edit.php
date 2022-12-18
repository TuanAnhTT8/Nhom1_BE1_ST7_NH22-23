<?php
include "header.php";
include "sidebar.php";

if(isset($_GET['id'])){
  $id = $_GET['id'];

  $p = $product->getProductbyID($id);

}
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="edit.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="hidden" name="id" value="<?php echo $p[0]['id'] ?>">
                <input type="text" id="inputName" class="form-control" name = "name" value="<?php echo $p[0]['name'] ?>">
              </div>
              <div class="form-group">
                <label for="inputName">Price</label>
                <input type="text" id="inputName" class="form-control" name="price" value="<?php echo $p[0]['price'] ?>">
              </div>
              <div class="form-group">
                <label for="inputName">Image</label>
                <input type="file" id="inputName" class="form-control" name="image">
                <img style=300px src="../img/<?php echo $p[0]['image'] ?>" alt="">
              </div>
              
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" class="form-control" rows="4" name="des" value="<?php echo $p[0]['description'] ?>"></textarea>
              </div>

              <div class="form-group">
                <label for="inputStatus">Manufacture</label>
                <select id="inputStatus" class="form-control custom-select" name="manu">
                  <option selected disabled>Select one</option>
                  <?php $manu1 = $manu->getAllManufactures();
                    foreach($manu1 as $value):
                    if($value['manu_id'] == $p[0]['manu_id']):
                    ?>
                     <option selected value="<?php echo $value['manu_id'] ?>"> <?php echo $value['manu_name'] ?> </option>
                     <?php else: ?>
                  <option value="<?php echo $value['manu_id'] ?>"> <?php echo $value['manu_name'] ?> </option>
                    <?php endif; endforeach; ?>
                </select>

              </div>
              <div class="form-group">
                <label for="inputStatus">Protype</label>
                <select id="inputStatus" class="form-control custom-select" name="type">
                  <option selected disabled>Select one</option>
                  <?php $type1 = $type-> getAllProtype();
                    foreach($type1 as $value2):
                    if($value2['type_id'] == $p[0]['type_id']):?>
                    <option selected value="<?php echo $value2['type_id'] ?>"> <?php echo $value2['type_name'] ?> </option>
                    <?php  else: ?>
                  <option value="<?php echo $value2['type_id'] ?>"> <?php echo $value2['type_name'] ?> </option>
                    <?php endif ;endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">Feature</label>
                <input type="checkbox" id="inputName" class="form-control" name="feature">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
       
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Update Product" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.php"; ?>