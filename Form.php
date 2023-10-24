<?php
class Form
{
    private $action;
    private $title;
    private $method;
    private $fields;
    public function __construct($action, $title, $method)
    {
        $this->action = $action;
        $this->title = $title;
        $this->method = $method;
        $this->fields = [];
    }
    public function add(Field $field)
    {
        $this->fields[] = $field;
    }
    
    public function render()
    {
        echo "<form action= '$this->action'
        method = $this->method>
        <h2>$this->title</h2>";
        foreach ($this->fields as $f) {
            echo $f->render();
        }
        echo "<br><input type = 'submit' value ='enviar'>
        </form>\n";
    }
}
