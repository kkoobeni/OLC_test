<?php

final class Form extends Element 
{
    protected string $tag;
    protected bool $isPair;
    //protected array $formElements;

    public function __construct()
    {
        $this->tag = 'form';
        $this->isPair = true;
        //$this->formElements = [];
    }

    //public function addElement($element): void
    //{
    //    $this->formElements[] = $element;
    //}

    //public function render(): string
    //{
    //    $html = "<{$this->tag}";
    //    foreach ($this->attributes as $name => $value) {
    //        $html .= " $name=\"" . htmlspecialchars($value, ENT_QUOTES) . "\"";
    //    }
    //    $html .= ">";
    //
    //    foreach ($this->formElements as $element) {
    //        $html .= $element->render();
    //    }
    //    $html .= "</{$this->tag}>";
    //    return $html;
    //}

    public function formStart(): string
    {
        $html = "<{$this->tag}";
        foreach ($this->attributes as $name => $value) {
            $html .= " $name=\"" . htmlspecialchars($value, ENT_QUOTES) . "\"";
        }
        $html .= ">";

        return $html;
    }

    public function formEnd(): string
    {
        return '</form>';
    }
}