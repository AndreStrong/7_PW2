<?php

    $dato1= $_POST["txtnombre"];  

    if ($dato1=="aaron"){
        echo "<h1>Hola</h1> " . $dato1;
        echo '<a href="Formulario.php">Regresa al inicio</a>';

    }else {
        echo "Eres alguien diferente";
        echo "<br>";
        echo '<a href="Formulario.php">aquí</a>';
        
    }
       
?>