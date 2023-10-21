<?php 
include_once('con_db.php');

    $cedulaC = $_POST['cedulaC'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $ubicacion = $_POST['ubicacion'];

        $query = "insert into clientes(cedulaC, nombre, telefono, ubicacion) values ('$cedulaC','$nombre', '$telefono', '$ubicacion')"; 
        $resultado = mysqli_query($conn, $query);
 
        $query = "SELECT * FROM clientes"; 
        $resultado = mysqli_query($conn, $query);
 
        while ($fila = mysqli_fetch_assoc($resultado)) { 
            ?>
                <tr> 
                    <td><?php echo $fila['cedulaC']; ?> </td>
                    <td><?php echo $fila['nombre']; ?> </td>
                    <td><?php echo $fila['telefono']; ?> </td>
                    <td><?php echo $fila['ubicacion']; ?> </td>
    
                 </tr> 
            <?php
            
                } 
?>       

