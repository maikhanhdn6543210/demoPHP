<?php
    include 'models/product_db.php';
    // include 'models/category_db.php';
    // include 'models/database.php';

    class CartController
    {
        public function checkRequest()
        {
            $cartAction = "";
            $cartAction = isset($_GET['cart']) ? $_GET['cart'] : '';
            switch($cartAction) {
                case 'add':
                    var_dump('abc');exit();
                    $product2 = new ProductModel();
                    if (isset($_GET['addId'])) {
                        $done = true;
                        $resultCart = $product2->getProductById($_GET['addId']);
                        
                        while ($row = mysqli_fetch_array($resultCart)) {
                            $_SESSION['product_' . $_GET['addId']] = isset($_SESSION['product_' . $_GET['addId']]) ? $_SESSION['product_' . $_GET['addId']] : 0;
                            if ($row['product_quantity'] != $_SESSION['product_' . $_GET['addId']]) {
                                $_SESSION['product_' . $_GET['addId']] += 1;
                            } else {

                            }
                        }
                    }
                    include('views/shoppingCart.php');
                    // while ($row = mysqli_fetch_array($result)) {
                    //     if ($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]) {
                    //         $_SESSION['product_' . $_GET['add']] += 1;
                    //         header("Location: checkout.php");
                    //     } else {
                    //         set_message("We only have {$row['product_quantity']} " . $row['product_title'] . " available in store");
                    //         header("Location: checkout.php");
                    //     }
                    // }
                    break;
            }
        }
    }
