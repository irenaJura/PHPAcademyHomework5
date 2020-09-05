<?php

namespace MainDir;

use Prefix\Prefix;

final class App
{
    public function randomViewAction($dateStr, $random)
    {
        return $dateStr . ' ' . $random->viewAction();
    }
}


