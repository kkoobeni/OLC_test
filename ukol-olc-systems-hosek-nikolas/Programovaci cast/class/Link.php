<?php

final class Link extends Element 
{
    protected string $tag;
    protected bool $isPair;

    public function __construct()
    {
        $this->tag = 'a';
        $this->isPair = true;
    }
}