<?php require '../src/table_1.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TableOfContent</title>
        <link rel="stylesheet" type="text/css" href="css/csss.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
    </head>
    <body class="ta">
       <div>
            <button><a href="index.php">index</a></button>
        </div>
        <div class="tl">
        <table class="table">
            <tr> 
                <th>ID</th>
                <th>Users</th>
                <th>Password</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Edit</th>
                <th>Delet</th>
            </tr>
            <?php while($f = mysqli_fetch_array($s)): ?> 
            <tr class="one">
                <td class="id"><?php echo $f['ID'] ?></td>
                <td><?php echo $f['User'] ?></td>
                <td><?php echo $f['Password']?></td>
                <td><?php echo $f['Name']?></td>
                <td><?php echo $f['LastName']?></td>
                <td><?php echo $f['Phone']?></td>
                <td><a href="table.php?edit=<?php echo $f['ID'];?> ">Edit</a></td>
                <td><a href="table.php?delet=<?php echo $f['ID'];?>">Delet</a></td>
            </tr>
            <?php endwhile ?>
        </table>
        <?php if(isset($_GET['edit'])){ include ('../src/get.php');} ?>
        <?php if(isset($_GET['delet'])){include '../src/delet.php';}?>
        </div>
        
    </body>
</html>