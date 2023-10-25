<?php

class Paragraph extends Element
{
    private $text;

    public function __construct($text) {
        $this->text = $text;
    }
    public function render()
    {
        echo "<p>$this->text</p>";
    }
}
