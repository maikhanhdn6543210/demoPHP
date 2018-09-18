<?php require_once("database.php") ?>
<?php require_once("category_db.php") ?>

<?php
    function get_product()
    {
        global $db, $conn;
        $query = 'SELECT * FROM products';
        $result = $db -> query($query);
        while ($row = $result -> fetch()) {
            //echo $row['product_name'];
            $category = get_category_name($row['product_cat_id']);
            $d = strtotime($row['date_post']);
            $date = date("d-m-Y", $d);
            $product = <<<EOT
            <tr>
                <td>{$row['product_id']}</td>
                <td>
                    
                    <a href="index.php?edit_product&id={$row['product_id']}">
                        {$row['product_name']}<br>
                        <img width='100' src="../controllers/uploads/{$row['product_image']}" alt="">
                    </a>
                </td>
                <td>{$category}</td>
                <td>{$row['price']}</td>
                <td>{$row['price_reduce']}</td>
                <td>{$row['product_quantity']}</td>
                <td>{$date}</td>
                <td>
                    <button class="btn btn-danger js-delete" data-product-id="{$row['product_id']}" ><span class="glyphicon glyphicon-remove"></span></button></td>
            </tr>
EOT;
            echo $product;
        }
        /*

        <a class="btn btn-danger js-delete" href="../controllers/product_manager.php?delete_product={$row['product_id']}" onclick="return confirm('Are you sure?');"><span class="glyphicon glyphicon-remove"></span></a></td>



        echo "<br/>";
        $result1 = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($result1)) {
            echo $row['product_name'];
        }
        */
    }

    function get_product_by_name($name) {
        global $db;
        $query = "SELECT * FROM products WHERE product_name LIKE '%".$name."%'";
        $result = $db -> query($query);
        while ($row = $result -> fetch()) {
            //echo $row['product_name'];
            $category = get_category_name($row['product_cat_id']);
            $d = strtotime($row['date_post']);
            $date = date("d-m-Y", $d);
            $product = <<<EOT
            <tr>
                <td>{$row['product_id']}</td>
                <td>
                    
                    <a href="index.php?edit_product&id={$row['product_id']}">
                        {$row['product_name']}<br>
                        <img width='100' src="../controllers/uploads/{$row['product_image']}" alt="">
                    </a>
                </td>
                <td>{$category}</td>
                <td>{$row['price']}</td>
                <td>{$row['price_reduce']}</td>
                <td>{$row['product_quantity']}</td>
                <td>{$date}</td>
                <td>
                    <button class="btn btn-danger js-delete" data-product-id="{$row['product_id']}" ><span class="glyphicon glyphicon-remove"></span></button></td>
            </tr>
EOT;
            echo $product;
        }

    }

    

?>