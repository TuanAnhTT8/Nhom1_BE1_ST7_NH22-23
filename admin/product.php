<?php
include "header.php";
include "sidebar.php";
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Products</h3>
          <a href="product-add.php" class="btn btn-info btn-sm"> Add </a>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          ID
                      </th>
                      <th style="width: 20%">
                         Images
                      </th>
                      <th style="width: 30%">
                          Name
                      </th>
                      <th style="width: 10%">
                          Manu_id
                      </th>
                      <th style="width: 10%">
                          Type_id
                      </th>
                      <th style="width: 10%">
                          Price
                      </th>
                      <th style="width: 50%">
                        Descriptions
                      </th>
                      <th style="width: 10%">
                        Feature
                      </th>
                      
                  </tr>
              </thead>
              <tbody>
              <?php foreach($getAllProducts as $values): ?>
                  <tr>
                      <td>
                          <?php echo $values['id'] ?>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img  width=150px src="../img/<?php echo $values['image'] ?>">
                              </li>
                          </ul>
                      </td>
                      <td>
                          <a>
                          <?php echo $values['name'] ?>
                          </a>
                          <br/>
                          <small>
                          <?php echo $values['created_at'] ?>
                          </small>
                      </td>
                      <td>
                          <?php echo $values['manu_name'] ?>
                      </td>
                      <td>
                          <?php echo $values['type_name'] ?>
                      </td>
                      <td>
                          <?php echo $values['price'] ?>
                      </td>
                      <td>
                          <?php echo substr($values['description'], 0, 100) ?>
                      </td>
                      <td>
                          <?php echo $values['feature'] ?>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="product-edit.php?id=<?php echo $values['id']?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="product-del.php?id= <?php echo $values['id'] ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <?php endforeach ; ?> 
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.php"; ?>