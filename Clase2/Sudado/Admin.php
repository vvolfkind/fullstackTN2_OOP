<?php

class Admin extends User
{
    private $isAdmin;

    public function __construct($a, $b, $c, $isAdmin)
    {
        parent::__construct($a, $b, $c);
        $this->isAdmin = $isAdmin;
    }

}
