<?php

class MultipleField extends Field
{
    private $option = [];
    public function __construct($name, $type, $text, $default = '', $option = [])
    {
        parent::__construct($name, $type, $text, $default);
        $this->option = $option;
    }
    public function addOption(string $key, string $value)
    {
        $this->option[$key] = $value;
        

    }


    public function render()
    {
        if ($this->type == 'select') $this->renderSelect();
        if ($this->type == 'radio') $this->renderRadio();

    }
    private function renderSelect(){
        echo "<label for = 'id_$this->name'>$this->text</label>";
        echo "<select id = 'id_$this->name' name = '$this->name' >";
        foreach ($this->option as $key => $value) {
            $selected = ($key == $this->default) ? 'selected' : '';
            echo "<option value= '$value' $selected>$key</option>";
        }
    }
    private function renderRadio (){
        echo "<h2>$this->text</h2>";
        foreach ($this->option as $key => $value) {
            $checked = ($key == $this->default) ? 'checked' : '';
            echo "<p><input id = 'id_$value' type = 'radio' name = '$this->name ' value = '$value' $checked>
            <label for = 'id_$value'>$key</label></p>";
        }
        
    }
}
