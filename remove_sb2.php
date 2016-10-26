<?php
    $escape = function ($filename){
        return htmlspecialchars($filename);
    };
    $which_del = array_map($escape,$_POST['which_del']);
    print_r($which_del);
?>