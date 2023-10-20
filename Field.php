<?php

class Field
{
    private $name;
    private $type;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }
    public function render() {
        echo "<p><label for= id_'$this->name'>$this->name: </label> 
            <input type= '$this->type' name= '$this->name' id= id_'$this->name'></p>";
    }
}
