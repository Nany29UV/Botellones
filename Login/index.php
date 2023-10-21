<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOTELLONES</title>
    <link rel="stylesheet" href="registro.css">
    <link rel="shortcut icon" href="../img/LOGO.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style= "background-color: #91d3d0; !important">
    <form action="iniciarsesion.php" method="POST">
        <h1> INICIAR SESIÓN</h1>
        <hr>
        <?php
        if(isset($_GET['error'])){
        ?>
        <p class="error">
            <?php
            echo $_GET['error']
            ?>
        </p>
        <?php
        }
        ?>
        <i class="fa-solid fa-user"></i>
        <label>Usuario </label>
        <input type="text" placeholder="Ingresa tu usuario" name="usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Contraseña</label>
        <input type="password" placeholder="Ingresa contraseña" name="contraseña">
        
        <hr>
        <button type="submit">Iniciar sesión</button>
    </form>

</body>
</html>