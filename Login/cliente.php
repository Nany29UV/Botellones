<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cliente.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <title>Registrar cliente</title>

</head>
<script> 
        $(document).ready(function() { 
            $('#formulario').submit(function(event) { 
                event.preventDefault(); 

                var cedulaC = $('#cedulaC').val();
                var nombre = $('#nombre').val(); 
                var telefono = $('#telefono').val();
                var ubicacion = $('#ubicacion').val();
                var data=
                {

                    "cedulaC" : $('#cedulaC').val(),
                    "nombre" : $('#nombre').val(),
                    "telefono" : $('#telefono').val(),
                    "ubicacion" : $('#ubicacion').val(),

                }
 
                $.ajax({ 
                    url: 'registrar_cliente.php', 
                    type: 'POST', 
                    data: data, 
                    success: function(response) { 
                       console.log(response);
                       document.getElementById("response").innerHTML = response;
                    } 
                }); 
            }); 
        }); 
    </script> 

<body style= "background-color: #91d3d0; !important">
<h1 align="center" style="color: #269e98 !important ">REGISTRO DE CLIENTE</h1> 
    <form id="formulario" method="POST" align="center"> 

        <label for="cedulaC">cedula:</label> 
        <input type="text" id="cedulaC"  pattern="[0-9]*" min="7" max="8" name="cedulaC" required><br> <br>

        <label for="nombre">Nombre:</label> 
        <input type="text" id="nombre"  pattern="[A-Za-z]+" minlength="2" maxlength="25" name="nombre" required><br> <br>
 
        <label for="telefono">Teléfono:</label> 
        <input type="text" id="telefono" pattern="[0-9]*" min="1" max="13" name="telefono" required><br> <br>

        <label for="ubicacion">Ubicacion:</label> 
        <input type="text" id="ubicacion"  pattern="[A-Za-z0-9\]+" minlength="2" maxlength="100" name="ubicacion" required><br> <br>
 
        <button type="submit" style="background-color: #269e98">Guardar</button> 
        <button type="reset" style="background-color:  #269e98 !important">Limpiar</button> <br><br><br>
        
    </form> 

    <h2 align="center" style="color: #269e98 !important" >Lista de Clientes</h2> 
    <div id="lista_clientes" align="center"> 

    <table border="2" style="text-align:center;background-color: rgb(252, 252, 252) !important;  border-color:#269e98">
        <tr style=" background-color: rgb(252, 252, 252) !important">
            <td>Cedula</td>
            <td>Nombre</td>
            <td>Telefono</td>
            <td>Ubicacion</td>
        </tr> 
    <tbody id="response"></tbody>
    </table><br> <br> <br>

    <a href="fpdf/ReporteCliente.php">
       <button type="submit" style="background-color:  #269e98 !important">Generar reporte</button>
    </a>        

    <a  href="inicio.php">
       <button type="" style="background-color:  #269e98 !important">Volver</button>
       <br>
       <br>
    </a> 




