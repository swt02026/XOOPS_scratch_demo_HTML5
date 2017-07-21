<?php

namespace Upload\Validation;

class FileExist extends \Upload\Validation\Base
{

    private $dirName;

    public function __construct($dirName)
    {
        $this->dirName = $dirName;
    }

    public function validate(\Upload\File $file)
    {

        // TODO: Implement validate() method.
        $this->setMessage('file exist');

        return !file_exists($this->dirName . $file->getNameWithExtension());

    }

}

?>
