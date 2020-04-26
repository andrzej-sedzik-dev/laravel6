<?php


namespace App;


class Example
{
    protected $collabolator;
    protected $foo;

    public function __construct(Collaborator $collabolator, $foo)
    {
        $this->collabolator = $collabolator;
        $this->foo = $foo;
    }

}
