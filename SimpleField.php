<?php
require_once 'Field.php';
class SimpleField extends Field
{


    public function render()
    {
        if ($this->type == 'checkbox') {
            if ($this->default == 'true') {
                $value = "checked";
            } else {
                $value = "";
            }
        } else $value = "value = '$this->default'";
        echo "<p><label for= id_'$this->name'>$this->name: </label> 
            <input type= '$this->type' name= '$this->name' id= id_'$this->name' value='$this->default'></p>";
    }
}
