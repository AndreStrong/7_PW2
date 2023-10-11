<?php
if(isset($_GET['boton'])){
    
    $_salario = $_GET['salario'];
    $_edad = $_GET['edad'];
    if ($_salario<0 || $_edad <18){
        if ($_edad < 18){
            echo "<center><h1>El usuario es menor de edad</h1>";
        }else {
            echo "<center><h1>El valor: " . $_salario .  "<b>ES INCORRECTO</b></h1><br>" ;
        }
             
        echo '<a href="index.php"><button>Regresa al inicio</button></a></center>';

    }else {
        $_nombre = $_GET['nombre'];
        $_paterno = $_GET['paterno'];
        $_materno = $_GET['materno'];
        $_salarioAnio = $_salario * 12;
        $_necesidades = $_salarioAnio / 2;
        echo "<center><h1>Bienvenido cliente " . "";        
        echo $_nombre;
        echo " ";
        echo $_paterno;
        echo " ";
        echo $_materno;
        echo "<hr></h1>";
        echo "<center><h2>Tendra un total de ingresos dentro de un año: <h1>" . $_salarioAnio . "</h1>";
        echo $_salarioAnio;
        echo "De los cuales debera de destinar $";
        echo $_necesidades;
        echo " para necesidades basicas </h2></center>";
    



    }

    }
    
