<?php

final class Select extends Element 
{
    protected string $tag;
    protected bool $isPair;
    protected array $options;

    public function __construct()
    {
        $this->tag = 'select';
        $this->isPair = true;
        $this->options = [];
    }

    public function addOption(string $value, string $label): void
    {
        $this->options[] = ['value' => htmlspecialchars($value, ENT_QUOTES), 'label' => htmlspecialchars($label, ENT_QUOTES)];
    }

    public function render(): string
    {
        $html = "<{$this->tag}";
        foreach ($this->attributes as $name => $value) {
            $html .= " $name=\"" . htmlspecialchars($value, ENT_QUOTES) . "\"";
        }
        $html .= ">";
        foreach ($this->options as $option) {
            $html .= "<option value=\"{$option['value']}\">{$option['label']}</option>";
        }
        $html .= "</{$this->tag}>";
        return $html;
    }
}