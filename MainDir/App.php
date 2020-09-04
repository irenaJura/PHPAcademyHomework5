<?php

namespace MainDir;

final class App
{
    public function randomViewAction($randomClass)
    {
        return $randomClass->viewAction();
    }
}
