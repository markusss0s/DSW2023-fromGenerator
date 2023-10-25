<?php
require_once 'Render.php';
abstract class Element implements Renderizable
{
    abstract public function render();
}