<?php

require_once '../model/letter.php';

class LetterController
{

    public function __construct()
    {
        $this->letterObj = new Letter();
    }
   
    public function addLetter($toys,$content,$signature)
    {
        $this->letterObj->addLetter($toys, $content, $signature);
    }
}

?>