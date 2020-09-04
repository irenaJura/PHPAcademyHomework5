<?php

namespace Cool\SubDir;

class Cool
{
    public function viewAction()
    {
        return get_class($this);
    }
}
