<?php

namespace Awesome\SubDir;

class Awesome
{
    public function viewAction()
    {
        return get_class($this);
    }
}

// Tomina referenca
//namespace Inchoo\Catalog;
//
//class Product
//{
//
//    public function getType()
//    {
//        return 'Inchoo Product';
//    }
//}