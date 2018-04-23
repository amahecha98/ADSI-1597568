
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MyFirstCalculator</title>
        <link href="css/cal.css" rel="stylesheet">
        <link href="css/flexbox.css" rel="stylesheet">
    </head>
    <body>
        <div class="one">
        <form action="calc.php" method="get">
            <input type="number" name="variable1">
            <br>
            <select name="Operation">
                <option value="">Select a operation</option>
                <option value="1">Sum + </option>
                <option value="2"> Rest - </option>
                <option value="3">Mult x</option>
                <option value="4">Div / </option>
                <option value="5">Log</option>
                <option value="6">Squared</option>
                <option value="7">Pow</option>
                <option value="8">√</option>
                <option value="9">Root</option>
                <option value="10">Div module</option>
            </select>
            <br>
            <input type="number" name="variable2">
            <br>
            <button type="submit">Operate</button>
        </form>
        <p><?php if (isset($message)=== true):?>
            <?php echo $message ?>
            <?php endif ?>
        </p>
        </div>
        <div class="two"></div>
        <div class="one">
            <ul>
                <li>The first box shows the first number and the second the basis of the logarithm.</li>
                <li>For the square  only the first box is used.</li>
                <li>For the square root only the first box is used</li>
                <li>First drawer will go the variable and in the second drawer will go the root number.</li>
            </ul>
        </div>
    </body>
</html>
