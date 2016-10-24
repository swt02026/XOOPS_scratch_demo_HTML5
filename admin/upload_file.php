<?php
    require '../vendor/autoload.php';
    $uploadDir = '../sb2-js/examples/';
	$storage = new \Upload\Storage\FileSystem($uploadDir);
    $file = new \Upload\File('file', $storage);

    $file->addValidations([
        new \Upload\Validation\Mimetype('application/octet-stream'),
        new \Upload\Validation\Extension('sb2'),
        new \Upload\Validation\Size('5M'),
        new \Upload\Validation\FileExist($uploadDir)
    ]);

    try{
        $file->upload();
    }catch (\Exception $e){
        echo $e->getMessage();
    }
?>