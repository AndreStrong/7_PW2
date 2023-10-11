<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi formulario</title>
</head>
<body>
    <center>
        <h1>Bienvenido al formulario PHP</h1>
            <h2>Por cuestiones de seguridad debera de ingresar los siguientes datos</h2>
            <hr>
            <section>
                <form action="formulario.php">
                    <p>NOMBRE(S): </p>
                    <input type="text" name="nombre" placeholder = "Nombre">
                    <br>
                    <p>APELLIDO PATERNO: </p>
                    <input type="text" name="paterno" placeholder = "Paterno">
                    <br>
                    <p>APELLIDO MATERNO: </p>
                    <input type="text" name="materno" placeholder = "Materno">
                    <br>
                    <p>EDAD: </p>
                    <input type="text" name="edad" placeholder = "p.e 20">
                    <br>
                    <p>SALARIO MENSUAL: </p>
                    <input type="text" name="salario" placeholder = "Valor entero p.e 2500">
                    <br>
                    <br>
                    <input type="submit" name="boton" value="ENVIAR">
                </form>
            </section>

    </center>
    
</body>
</html>