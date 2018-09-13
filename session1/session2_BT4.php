<?php
    $arr3 = array(
                array(
                    'name' => 'Khoi',
                    'birthday' => 1997,
                    'gender' => 'male'
                ),
                array(
                    'name' => 'Trung',
                    'birthday' => 1985,
                    'gender' => 'male'
                ),
                array(
                    'name' => 'Huyen',
                    'birthday' => 1987,
                    'gender' => 'female'
                ),
    );

    function showInfor($arr)
    {
        foreach ($arr as $key => $value) {
                $age = date('Y') - $value['birthday'];
                echo $value['name'] . ' - ' . $age . ' Age - ' . $value['gender'] ;
            echo "<br/>";
        }
    }
    //1. In ra danh sach hoc vien
    showInfor($arr3);

    //2. Doi ten Trung thanh TrungDoan
    echo "<br>-------2: Update Trung to TrungDoan-------<br>";
    $arr3[1]['name'] = "TrungDoan";
    showInfor($arr3);

    //3.
    echo "<br>-------3: Add Cuong - 1996 - Male -------<br>";
    $arr_cuong = array(
        'name' => 'Cuong',
        'birthday' => 1996,
        'gender' => 'male'
    );
    array_push($arr3, $arr_cuong);
    showInfor($arr3);

    //4.
    echo "<br>-------4: Delete Khoi -------<br>";
    unset($arr3[0]);
    showInfor($arr3);

    //5.
    echo "<br>-------5: All male -------<br>";
    foreach ($arr3 as $key => $value) {
        if ($value['gender'] == 'male') {
            $age = date('Y') - $value['birthday'];
            echo $value['name'] . ' - ' . $age . ' Age - ' . $value['gender'] ;
        }
        echo "<br/>";
    }

    echo "<br>-------5': All male or female function -------<br>";

    function gender($arr,$male) {
        foreach ($arr as $key => $value) {
            if ($value['gender'] == $male) {
                $age = date('Y') - $value['birthday'];
                echo $value['name'] . ' - ' . $age . ' Age - ' . $value['gender'] ;
            }
            echo "<br/>";
        }
    }
    $female = 'female';
    gender($arr3,$female);




