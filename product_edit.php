<?php
session_start();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Cart</title>
</head>

<body>
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
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index2.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="manage.php">Manage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product2.php">Products <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Sign Out <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart2.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
                </li>
        </div>
        </li>
        </ul>
        </div>
    </nav>

    <!--body-->
    <div class="container-fluid" style="margin: 3% auto 0;">
        <div class="card shadow mb-4">
            <div class="card-header">
                <h6 class="m-1 font-weight-bold text-primary">Product Edit</h6>
            </div>
        </div>
        <div class="card-body">

            <?php
            if (isset($_POST['edit_btn'])) {
                $id = $_POST['edit_id'];

                $query = "SELECT * FROM product WHERE id='$id' ";
                $query_run = mysqli_query($conn, $query);

                foreach ($query_run as $row) {
            ?>

                    <form action="code.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">

                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="edit_name" value="<?php echo $row['product_name']?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="text" name="edit_price" value="<?php echo $row['product_price']?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Upload Image</label>
                            <input type="file" name="product_image" value="<?php echo $row['product_image']?>" id="product_image" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Product Code</label>
                            <input type="text" name="edit_code" value="<?php echo $row['product_code']?>" class="form-control">
                        </div>

                        <a href="manage.php" class="btn btn-danger"> CANCEL </a>
                        <button type="submit" name="update_btn" class="btn btn-primary"> Update </button>

                    </form>



            <?php
                }
            }
            ?>


        </div>
    </div>

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

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script type="text/javascript">
        $(document).ready(function() {

            // Change the item quantity
            $(".itemQty").on('change', function() {
                var $el = $(this).closest('tr');

                var pid = $el.find(".pid").val();
                var pprice = $el.find(".pprice").val();
                var qty = $el.find(".itemQty").val();
                location.reload(true);
                $.ajax({
                    url: 'action.php',
                    method: 'post',
                    cache: false,
                    data: {
                        qty: qty,
                        pid: pid,
                        pprice: pprice
                    },
                    success: function(response) {
                        console.log(response);
                    }
                });
            });

            // Load total no.of items added in the cart and display in the navbar
            load_cart_item_number();

            function load_cart_item_number() {
                $.ajax({
                    url: 'action.php',
                    method: 'get',
                    data: {
                        cartItem: "cart_item"
                    },
                    success: function(response) {
                        $("#cart-item").html(response);
                    }
                });
            }
        });
    </script>
</body>

</html>