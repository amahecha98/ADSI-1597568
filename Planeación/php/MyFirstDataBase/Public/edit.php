
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>edit</title>
        <link rel="stylesheet" type="text/css" href="css/table1.css">
    </head>

    
    <body>
        <div class="edit">
        <form method="POST" action="../src/update.php">
            <input type="text" name="user" value="<?php echo $users ?>">
            <input type="password" name="password" value="<?php echo $pass ?>">
            <input type="text" name="name" value="<?php echo $names ?>">
            <input type="text" name="lastname" value="<?php echo $lastname ?>">
            <input type="text" name="phone" value="<?php echo $phones ?>">
            <input type="submit" name="update" value="ACTUALIZAR DATOS">
            <input type="hidden" name="edit" value="<?php echo $_GET['edit'] ?>">
                
        </form>
        </div>
    </body>
</html>