<?php
namespace  Phi\Configuration;


use Phi\Traits\Collection;

abstract class Environment
{

    use Collection;

    private $name;


    abstract public function validate();


    public function getName()
    {
        return $this->name;
    }



}