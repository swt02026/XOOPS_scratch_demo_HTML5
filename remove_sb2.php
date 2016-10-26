<?php
    $escape = function ($filename){
        return addslashes(htmlspecialchars($filename));
    };

    $which_del = array_map($escape,$_POST['which_del']);
    $which_del = array_filter($which_del, function ($filename){
        file_exists("sb2-js/examples/$filename");
    });
    print_r($which_del);
?>