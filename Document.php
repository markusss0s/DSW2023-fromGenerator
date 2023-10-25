<?php
require_once 'Element.php';

class Document
{
    private $title;
    private $elements = [];
    protected $cabecera = [];

    public function __construct($title)
    {
        $this->title = $title;
    }
    public function add($element)
    {
        $this->elements[] = $element;
    }

    public function render()
    {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php $this->title ?></title>
            <style>
                form{
                    border: 1px solid black;
                }
            </style>
        </head>

        <body>
            <h1>Prueba</h1>
            <?php
            foreach ($this->elements as $element) {
                echo "<div>";
                $element->render();
                echo "</div>";
            }
            ?>
        </body>

        </html>
<?php }
}
?>