<?php
	$storage = new \Upload\Storage\FileSystem('../sb2-js/examples/');
    $file = new \Upload\File('file', $storage);

    $file->addValidations([
        new \Upload\Validation\Mimetype('application/octet-stream'),
        new \Upload\Validation\Extension('sb2'),
        new \Upload\Validation\Size('5M')
    ]);

    try{
        $file->upload();
    }catch (\Exception $e){
        echo $e->getMessage();
    }
?>