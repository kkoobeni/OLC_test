<?php

final class CustomDiv extends Element
{
    protected string $tag;
    protected bool $isPair;

    public function __construct()
    {
        $this->tag = 'div';
        $this->isPair = true;
    }

    public function divStart(): string
    {
        $html = "<{$this->tag}";

        if(!empty($this->attributes)) {
            foreach ($this->attributes as $name => $value) {
                $html .= " $name=\"" . htmlspecialchars($value, ENT_QUOTES) . "\"";
            }
        }

        $html .= ">";
        return $html;
    }

    public function divEnd(): string
    {
        return '</div>';
    }
}