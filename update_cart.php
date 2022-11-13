<?php
session_start();
include_once('config.php');

echo "<pre>";
print_r($_POST);
echo "</pre>";

if($_POST['type'] == 'add' && $_POST['product_quantity'] > 0) {
  $query = "SELECT * FROM product WHERE id = $_POST[product_id]";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);


//  if(isset($_SESSION['cart_product'])) {
//    if(isset($_SESSION['cart_product'][$row['id']])) {
//      unset($_SESSION['cart_product'][$row['id']]);
//    }
//
//  }
  $row['product_quantity'] = $_POST['product_quantity']; //add quantity yo array $row
  $_SESSION['cart_product'][$row['id']] = $row;
}

if(isset($_POST['product_quantity']) || isset($_POST['remove_code'])) {

  if(isset($_POST['product_quantity']) && is_array($_POST['product_quantity'])) {
    print_r($_SESSION['cart_product']);

    foreach ($_POST['product_quantity']as $key => $value) {
      if (is_numeric($value)) {
        $_SESSION['cart_product'][$key]['product_quantity'] = $value;
      }
    }
  }
//delete item in the cart
    if(isset($_POST['remove_code']) && is_array($_POST['remove_code'])){
      foreach ($_POST['remove_code'] as $key => $value) {
        unset($_SESSION['cart_product'][$value]);
      }

  }
}

if (isset($_POST['cat']) > 0) {
  $cat = $_POST['cat'];
  header('location: simple_b.php?cat='.$cat);
} else {
  header("location: indexlog.php"); //back to index
}

?>