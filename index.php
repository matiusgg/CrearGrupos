<?php
require 'vendor/autoload.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Escoger Grupo</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>
 <form action="php/Busqueda.php" method="post">

    </header>

<!-- SECTION -->
    <section>
    <article>
    <div>

    <h1>ESCOGE LA CANTIDAD DE GRUPOS Y LA ESPECIALIDAD</h1>

    <?php

    for($i = 0; $i < 3; $i++) {

echo"<input type=\"number\" name=\"numeroPersonas$i\">";

echo "<select name=\"especialidad$i\" >";

echo('<option value="frontend">');
echo('Frontend');
echo('</option>');

echo('<option value="backend">');
echo('Backend');
echo('</option>');

echo('<option value="php">');
echo('PHP');
echo('</option>');

echo('<option value="javascript">');
echo('javascript');
echo('</option>');

echo('<option value="sql">');
echo('MySQL');
echo('</option>');

echo('<option value="python">');
echo('Python');
echo('</option>');

echo('<option value="java">');
echo('Java');
echo('</option>');

echo('<option value="fullstack">');
echo('FullStack');
echo('</option>');

echo('</select>');

echo('<br>');

    }

    ?>

    <button type="submit">
    CREAR
    </button>
    </div>
    </article>
    </section>

    <!-- FOOTER -->

    <footer>
    
    
    </footer>

    </form>
</body>
</html>