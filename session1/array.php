<?php
    $arr = array();
    
    var_dump($arr);     //Use for debug
    echo "<br/>";
    $arr = array('Trung', 'Huyen', 'Khanh');
    $arr1 = array(0 =>'Trung', 1=>'Huyen', 2=>'Khanh');
    $arr2 = array(0 =>'Trung', 1=>'Huyen', 4=>'Khanh');

    var_dump($arr);
    echo "<br/>";
    var_dump($arr1);
    echo "<br/>";
    var_dump($arr2);
    echo "<br/>";

    foreach ($arr1 as $key => $value) {
        echo $key;
        echo "<br/>";
        echo $value;
        echo "<br/>";
    }

    //Them 1 phan tu vao mang array_push
    array_push($arr1,'Hung');


?>