<?php
    function escape($filename){

        return addslashes(htmlspecialchars($filename));
    }
    $which_del = implode(',', $_POST['which_del']);
    $del = array_map("escape",$which_del);
    print_r($which_del);
?>