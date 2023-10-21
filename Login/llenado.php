<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Llenado</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
</head>

    <script> 
        $(document).ready(function() { 

            $('#formulario').submit(function(event) { 
                event.preventDefault(); 

                var cedulaC = $('#cedulaC').val();
                var fecha = $('#fecha').val(); 
                var hora = $('#hora').val(); 
                var cantidad = $('#cantidad').val(); 
                var data =

                {   
                    "cedulaC" : $('#cedulaC').val(),
                    "fecha" : $('#fecha').val(),
                    "hora" : $('#hora').val(),
                    "cantidad" : $('#cantidad').val(),
                    
                }
                
                $.ajax({ 
                    url: 'insertar.php', 
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

<body  style= "background-color: #91d3d0; !important"> 
    <h1 align="center" style="color: #269e98 !important">REGISTRO DE LLENADO DE BOTELLONES</h1> 
    <form id="formulario" method="POST" align="center"> 

        <label for="cedulaC">Cedula del cliente:</label> 
        <input type="text" id="cedulaC" pattern="[0-9]*" min="7" max="8" name="cedulaC"  required><br><br>
 
        <label for="fecha">Fecha:</label> 
        <input type="date" id="fecha" name="fecha" required><br> <br>
 
        <label for="hora">Hora:</label> 
        <input type="time" id="hora" name="hora" required><br> <br>
 
        <label for="cantidad">Cantidad de Botellones:</label> 
        <input type="number" id="cantidad" min="1" max="100" name="cantidad" required><br> <br>
 
        <button type="submit" style="background-color:  #269e98 !important">Guardar</button>
        <button type="reset" style="background-color:  #269e98 !important">Limpiar</button>
        
    </form>
    
    <br><br> 
 
    <h2 align="center" style="color: #269e98 !important">LISTA DE LLENADO DE BOTELLONES</h2> 
    <div id="lista_llenados" align="center" > 

    <table border="2" style="text-align:center;background-color: rgb(252, 252, 252) !important;  border-color:#269e98">
        <tr>
            <th>Cedula</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Cantidad de Botellones</th>
        </tr> 
    <tbody id="response"></tbody>
    </table><br> <br> <br>

    <a href="fpdf/ReporteLlenado.php">
       <button type="submit" style="background-color:  #269e98 !important">Generar reporte</button>
    </a> 

    <a  href="inicio.php">
       <button type="" style="background-color:  #269e98 !important">Volver</button>
       <br>
       <br>
    </a> 



    </div> 
</body>
</html>

 