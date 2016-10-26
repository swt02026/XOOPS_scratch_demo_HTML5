<?php
    $escape = function ($filename){
        echo "aa";
        return htmlspecialchars($filename);
    };
    $which_del = explode(',', $_POST['which_del']);
    $del = array_map($escape,$which_del);
    print_r($del);
?>