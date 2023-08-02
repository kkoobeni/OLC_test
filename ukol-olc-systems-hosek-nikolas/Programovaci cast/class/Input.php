<?php

final class Input extends Element 
{
    protected string $tag;
    protected bool $isPair;

    public function __construct()
    {
        $this->tag = 'input';
        $this->isPair = false;
    }
}