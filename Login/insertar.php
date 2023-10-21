<?php 
include_once('con_db.php');

    $cedulaC = $_POST['cedulaC'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $cantidad = $_POST['cantidad'];

        $query = "insert into llenados(cedulaC, fecha, hora, cantidad) values ('$cedulaC','$fecha', '$hora', '$cantidad')"; 
        $resultado = mysqli_query($conn, $query);
 
        $query = "SELECT * FROM llenados"; 
        $resultado = mysqli_query($conn, $query);
 
        while ($fila = mysqli_fetch_assoc($resultado)) { 
            ?>
                <tr> 
                    <td><?php echo $fila['cedulaC']; ?> </td>
                    <td><?php echo $fila['fecha']; ?> </td>
                    <td><?php echo $fila['hora']; ?> </td>
                    <td><?php echo $fila['cantidad']; ?> </td>
    
                 </tr> 
            <?php
            
                } 
?>       