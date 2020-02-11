<?php

/**
 * 
 */
class Company
{
    public $name;

    public function setCompanyName(string $name)
    {
        $this->name = $name;
    }

    public function getCompanyName()
    {
        return $this->name;
    }
}