<?php

namespace MainDir;

final class App
{
    // get chosen class from index.php & output their viewAction method...somehow
    public function randomViewAction($randomClass)
    {
        return $randomClass->viewAction();
    }
}