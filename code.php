<?php
include("config.php");

//add product
if (isset($_POST['save_product'])) {
    $target = "image/".basename($_FILES['product_image']['name']);

    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $image = ("image/".$_FILES['product_image']['name']);
    $code = $_POST['product_code'];

    $sql = "INSERT INTO product (product_name, product_price, product_image, product_code) VALUES ('$name','$price','$image','$code')";
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['product_image']['tmp_name'], $target)) {
        $_SESSION['showAlert'] = 'block';
        $_SESSION['message'] = 'Item uploaded successfully!';
        header('Location: manage.php');
    }
    else{
        $_SESSION['showAlert'] = 'block';
        $_SESSION['message'] = 'There was a problem uploading the product';
    }
}


//update product
if(isset($_POST['update_btn']))
{
    $target = "image/".basename($_FILES['product_image']['name']);
    $edit_id = $_POST['edit_id'];
    $edit_name = $_POST['edit_name'];
    $edit_price = $_POST['edit_price'];
    $edit_image = ("image/".$_FILES['product_image']['name']);
    $edit_code = $_POST['edit_code'];

    $product_query = "SELECT * FROM product WHERE id='$edit_id' ";
    $product_query_run = mysqli_query($conn, $product_query);
    foreach($product_query_run as $product_row)
    {
        if($edit_image == NULL){
        //update with existing image
        $edit_image = $product_row['product_image'];
        }
        else {

        }
    }
    $query = "UPDATE product SET product_name='$edit_name', product_price='$edit_price', product_image='$edit_image', product_code='$edit_code' WHERE id='$edit_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        if($edit_image == NULL){
            //update with existing image
            $_SESSION['success'] = 'Item updated with existing image!';
            header('Location: manage.php');
        }
            else {
                move_uploaded_file($_FILES['product_image']['tmp_name'], $target);
                $_SESSION['showAlert'] = 'block';
                $_SESSION['message'] = 'Item updated successfully!';
                header('Location: manage.php');
            }
    }
    else{
        $_SESSION['showAlert'] = 'block';
        $_SESSION['message'] = 'There was a problem updating the product';
    }
}


//delete product
if(isset($_POST['delete_btn']))
{
    $delete_id = $_POST['delete_id'];

    $query = "DELETE FROM product WHERE id='$delete_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['success'] = "Faculty Data is Deleted";
        header("Location: manage.php");
    }
    else{
        $_SESSION['status'] = "Faculty Data is Not Deleted";
        header("Location: manage.php");
    }
}
