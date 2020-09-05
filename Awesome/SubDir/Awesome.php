<?php

namespace Awesome\SubDir;

class Awesome
{
    public function viewAction()
    {
        return get_class($this);
    }
}
