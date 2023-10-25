<?php
require_once 'Form.php' ;
require_once 'Field.php';
require_once 'SimpleField.php';
require_once 'MultipleField.php';

$form1 = new Form('testForm.php', 'Prueba formulario', 'post');
$form1->add(new SimpleField('Nombre', 'text', 'Escribe el nombre: '));
$form1->add(new SimpleField('Edad', 'number','Dígame su edad: ', 19));
$form1->add(new SimpleField('Color', 'color', 'Dígame tu colo favorito: ', '#ffffff'));
$form1->add(new SimpleField('Suscripcion', 'checkbox', '¿Quiere suscribirse?', true));
$options = [
    'Desarrollo en entorno servidor'=> 'DSW',
    'Desarrollo en entorno cliente'=> 'DEW',
    'Despliegue de aplicaciones'=> 'DPL'
];
//$mf1 = new MultipleField('Preferido','select','¿Cuál es tu módulo preferido?', 'Despliegue de aplicaciones', $options);
//$form1->add($mf1);
//$mf1->addOption('Diseño de interfaces', 'DOR');
//$form1->add($mf1);
$form1->add(new MultipleField('Preferido','radio','¿Cuál es tu módulo preferido?', 'Despliegue de aplicaciones', $options));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            border: 1px solid black;
            padding-left: 10px;
        }
    </style>
</head>

<body>
    
    <h1>Pruebas con formulario</h1>
    <?php $form1->render(); ?>

</body>

</html>