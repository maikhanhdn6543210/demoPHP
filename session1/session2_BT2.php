<?php
    $a = 3;
    switch ($a) {
        case 1:
            echo "this is number 1";
            break;
        case 2:
            echo "this is number 2";
            break;
        case 3:
            echo "this is number 3";
            break;
        default:
            echo "No number 1, 2 and 3";
            break;
    };

    echo "<br/>";
    echo "Bai Tap 1";
    echo "<br/>";
    function even($number)
    {
        if ($number % 2 == 0) {
            echo "This is the even number";
        } else {
            if ($number % 3 == 0) {
                echo "BA";
            } else {
                echo "Not for 3";
            }
        }
    }

    echo even(15);

    echo "<br/>";
    echo "Bai Tap 2";
    echo "<br/>";
    function month($number)
    {
        switch ($number) {
            case 1:
                echo "this is January";
                break;
            case 2:
                echo "this is February";
                break;
            case 3:
                echo "this is March";
                break;
            case 4:
                echo "this is April";
                break;
            case 5:
                echo "this is May";
                break;
            case 6:
                echo "this is June";
                break;
            case 7:
                echo "this is July";
                break;
            case 8:
                echo "this is August";
                break;
            case 9:
                echo "this is September";
                break;
            case 10:
                echo "this is October";
                break;
            case 11:
                echo "this is November";
                break;
            case 12:
                echo "this is December";
                break;
            default:
                echo "Not the month";
                break;
        };
    }

    echo month(5);


