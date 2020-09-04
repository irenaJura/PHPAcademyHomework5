<?php

namespace Best\SubDir;

class Best
{
    public function viewAction()
    {
        return get_class($this);
    }
}