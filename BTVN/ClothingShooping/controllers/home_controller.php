<?php
include 'models/product_db.php';
include 'models/category_db.php';

    class HomeController
    {
        public function checkRequest()
        {
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            switch ($page) {
                case 'home':
                    include('views/home.php');
                    break;
                case 'shop':
                    // var_dump('$products1');
                    $products1 = new ProductModel();
                    $resultProduct = $products1->getListProduct();
                    // var_dump($resultProduct); exit();
                    include('views/shop.php');
                    include('views/shoppingCart.php');
                    break;
                case 'singleProduct':
                    $products = new ProductModel();
                    $result = $products->getProductById($_GET['productId']);
                    include('views/singleProduct.php');
                    break;
                case 'cart':
                    // $product2 = new ProductModel();
                    include('views/shoppingCart.php');
                    break;

            }
        }
    }
