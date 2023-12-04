<?php
    session_start();

    if (!isset($_SESSION["usuario"])) {
        header('Location: ./index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar perfil</title>
    <link rel = "stylesheet" href="http://localhost/JAIR/assets/css/estilosregistro.css">
    <link href="https://fonts.googleapis.com/css?family=roboto:300,400,500,700&display=swap" rel="stylesheet">
    
</head>
<body>
    <form action="./actualizar-perfil.php" method="POST" id="form">
        <div class="form">
            <h1>Editar perfil</h1>
            
            <div class="grupo">
                <input type="text" name="nombres" id="name_1" required value="<?php echo $_SESSION["usuario"]->nombres; ?>"><span class="barra"></span>
                <label for="">Nombre</label>
            </div>  
            <div class="grupo">
                <input type="text" name="apellidos" id="name_2" required value="<?php echo $_SESSION["usuario"]->apellidos; ?>"><span class="barra"></span>
                <label for="">Apellidos</label>
            </div>  
            <button type="submit" name= "registrar">Actualizar</button>
            <p class="warnings" id="warnings"></p>
        </div>
    </form>
    
    

</body>
</html>