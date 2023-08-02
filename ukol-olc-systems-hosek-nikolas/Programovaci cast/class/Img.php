<?php

final class Img extends Element 
{
    
    protected string $tag;
    protected bool $isPair;

    public function __construct()
    {
        $this->tag = 'img';
        $this->isPair = false;
    }

}