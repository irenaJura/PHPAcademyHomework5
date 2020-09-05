<?php

namespace Prefix;

class Prefix
{
    private $date;

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
}

//$p = new Prefix();
//$p->setDate(date('d/m/Y'));
//echo $p->getDate();