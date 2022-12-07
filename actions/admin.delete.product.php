<?php
require('../controllers/products.controller.php');

if (isset($_GET['product_id'])) {
    $id = $_GET['product_id'];

    // call the function
    $result = delete_product_controller($id);

    if ($result === true) {
        header('Location: ../admin/products.php');
    } else {
        echo 'deletion failed';
    }
}
