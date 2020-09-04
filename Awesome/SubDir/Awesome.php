<?php

namespace Awesome\SubDir;

class Awesome
{
    public function viewAction()
    {
        return get_class($this);
    }
}

//$a = new Awesome();
//echo $a->viewAction();
//var_dump($a);
