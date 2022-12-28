<?php

require_once '../model/toys.php';

class ToysController
{

    public function __construct()
    {
        $this->toysObj = new Toys();
    }

    public function getToys()
    {
        return $this->toysObj->getToys();
    }

    public function addToy($name,$description,$image)
    {
        $this->toysObj->addToy($name,$description,$image);
    }
}

?>