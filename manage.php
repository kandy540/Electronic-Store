<?php
include("config.php");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Kandy Buy</title>
</head>

<body>
  <!--Navbar-->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-dark justify-content-between">
    <a class="navbar-brand" href="index2.php">Kandy Buy <i class='fas fa-desktop'></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto" id="search">
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search products" aria-label="Search">
          <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
        </form>
      </ul>
      <ul class="navbar-nav mr-auto">
        <li class="employee-header">Employee Site</li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index2.php">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="manage.php">Manage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product2.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Sign Out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart2.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
    </div>
    </li>
    </ul>
    </div>
  </nav>

  <!-- Modal -->
  <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="code.php" method="POST" enctype="multipart/form-data">
          <div class="modal-body">

            <div class="form-group">
              <label>Product Name</label>
              <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name" required>
            </div>

            <div class="form-group">
              <label>Product Price</label>
              <input type="text" name="product_price" class="form-control" placeholder="Enter Product Price" required>
            </div>

            <div class="form-group">
              <label>Upload Image</label>
              <input type="file" name="product_image" id="product_image" class="form-control" required>
            </div>

            <div class="form-group">
              <label>Product Code</label>
              <input type="text" name="product_code" class="form-control" placeholder="Enter Product Code" required>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="save_product" class="btn btn-primary">Save</button>
          </div>
        </form>

      </div>
    </div>
  </div>

  <!--Body-->
  <div class="container-fluid" style="margin-top:3%">
    <div class="card shadow mb-1">
      <h6 class="m-1 font-weight-bold text-priamry"> Products
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">
          ADD
        </button>
      </h6>
    </div>
    <div class="card-body">
    <?php 
      if(isset($_SESSION['success']) && $_SESSION['success'] !='')
      {
        echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].' </h2>';
        unset($_SESSION['success']);
      }

      if(isset($_SESSION['status']) && $_SESSION['status'] !='')
      {
        echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
        unset($_SESSION['status']);
      }
      ?>
      <div class="table-responsive">

        <?php
        $query = "SELECT * FROM product";
        $query_run = mysqli_query($conn, $query);
        
        ?>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th> ID </th>
              <th>Product Name</th>
              <th>Product Price</th>
              <th>Product Image</th>
              <th>Product Code</th>
              <th>EDIT </th>
              <th>DELETE </th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (mysqli_num_rows($query_run) > 0) {
              while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['product_name']; ?></td>
                  <td><?php echo $row['product_price']; ?></td>
                  <td><?php echo '<img src='.$row['product_image']. ' style width="150px;" height="150px;"'; ?></td>
                  <td><?php echo $row['product_code']; ?></td>
                  <td>
                    <form action="product_edit.php" method="post">
                      <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                      <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                    </form>
                  </td>
                  <td>
                    <form action="code.php" method="post">
                      <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                      <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                    </form>
                  </td>
                </tr>
            <?php
              }
            } else {
              echo "No Record Found";
            }
            ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
  </div>

  <!--footer-->
  <footer class="container-fluid text-center">
    <p>Copyright @ 2021 Kandy</p>
    <div id="foot">
      <form class="form-inline">
        <div style="margin-right:5px">Get deals:</div>
        <input type="email" class="form-control" size="50" placeholder="Email Address" style="margin-right:5px">
        <button type="button" class="btn btn-danger">Sign Up</button>
      </form>
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>

</html>