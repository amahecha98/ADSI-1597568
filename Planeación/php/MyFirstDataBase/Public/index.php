<!DOCTYPE html>  
    <html>
        <head>
            <title>MY_first_data_base</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="css/css.css">
            <link rel="stylesheet" type="text/css" href="css/responsive.css">
        </head>
        <body>
            <div class="form">
            <button>
                <a href="table.php">Users</a>
            </button>
                <form method="POST" action="insert.php">
                <label>Name:</label>
                <input type="text" name="name">
                <br>
                <label>Last Name:</label>
                <input type="text" name="last_name">
                <br>
                <label>Phone:</label>
                <input type="number" name="phone">
                <br>
                <label>User:</label>
                <input type="text" name="user">
                <br>
                <label>password:</label>
                <input type="password" name="passw">
                <br>
                <input class="insert" type="submit" name="inser" value="INSERT DATA">
            </form>
            </div>  
        </body>
            
    </html>
