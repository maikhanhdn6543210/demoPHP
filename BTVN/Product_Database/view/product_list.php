<?php require_once("../models/product_db.php") ?>
<div class="container">
    <h1 class="page-header">
    All Products
    </h1>
    <table class="table table-hover" id="product">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Price reduce</th>
            <th>Quantity</th>
            <th>Date Post</th>
        </tr>
        </thead>
        <tbody>
        <?php //get_product();?>
        <?php if (isset($_POST['search'])) {
                get_product_by_name($_POST['search']) ;
            } else get_product();
        // var_dump($_POST['search']);
        ?>
        </tbody>
    </table>
</div>