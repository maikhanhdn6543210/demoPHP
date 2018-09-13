<?php
    

    function print_product($product)
    {
        foreach ($product as $key => $value) {
            echo $value;
            echo "<br/>";
        }
    }
    echo "<br>-------1: Print Product-------<br>";
    $product = array('BanhKeo', 'TraiCay', 'DoChoi');
    print_product($product);
    echo "<br>-------2: Add AoQuan-------<br>";
     //them mot phan tu vao mang bang array_push
    array_push($product, 'AoQuan');
    print_product($product);
    echo "<br>-------3: Update BanhKeo to ThucPham-------<br>";
    $product['0'] = 'ThucPham';
    print_product($product);
    echo "<br>-------4: Delete TraiCay-------<br>";
    unset($product['1']);
    print_product($product);

