<?php
    function escape($filename){

        return addslashes(htmlspecialchars($filename));
    }
    $which_del =
        array_map("escape",implode(',', $_POST['which_del']));
    print_r($which_del);
?>