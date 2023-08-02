<?php 

final class Div extends Element 
{
    protected string $tag;
    protected bool $isPair;

    public function __construct()
    {
        $this->tag = 'div';
        $this->isPair = true;
    }
}