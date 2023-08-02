<?php

abstract class Element
{
    protected ?array $attributes;
    protected bool $isPair;
    protected string $tag;
    protected ?string $value;

    public function setAttributes(?array $attributes): void
    {
        $this->attributes = $attributes;
    }

    public function setPair(bool $isPair): void
    {
        $this->isPair = $isPair;
    }

    public function setValue(string $value): void
    {
        if( $this->isPair === true ) {
            $this->value = $value;
        } else {
            throw new \Error('Nepárový tag nemůže mít value.');
        }
    }

    public function render(): string
    {
        $html = "<{$this->tag}";

        if(!empty($this->attributes)) {
            foreach ($this->attributes as $name => $value) {
                $html .= " $name=\"" . htmlspecialchars($value, ENT_QUOTES) . "\"";
            }
        }
        
        $html .= $this->isPair ? "> " . $this->value . " </{$this->tag}>" : " />";

        return $html;
    }

}