<?php
require '../vendor/autoload.php';
require_once('datos.php');

$persona = [

    ['luis' =>'frontend', 'luis' =>'java', 'luis' =>'php'],
    ['luis' =>'frontend', 'luis' =>'java', 'luis' =>'php'],
    // ['frontend', 'java', 'php'],
    // ['frontend', 'java', 'php'],
    // ['frontend', 'java', 'php']
];

foreach($persona AS $valor) {


    for($i = 0; $i < 3; $i++) {

        $inputEspecialidad = $_POST['especialidad' . $i];


        echo('<pre>');        
        print_r($_REQUEST);
        echo('</pre>');

}



if($inputEspecialidad == 'frontend') {
echo('<pre>');        
        print_r($valor[rand(0, 1)['luis']]);
        echo('</pre>');

}

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grupo</title>
</head>
<body>
    <section>
    <div>
    
<?php

?>
    
    </div>
    
    </section>
</body>
</html>