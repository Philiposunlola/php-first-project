<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP FIRST PROJECT</title>
        <link rel="stylesheet" href="style.css">
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
        <form action="function.php" method="get">
            <input type="text" name="num01" placeholder="Number 1">
            <select name="oper" id="">
                <option value="add">Add</option>
                <option value="sub">Subtract</option>
            </select>
            <input type="text" name="num02" placeholder="Number 2">
            <button type="submit">Calculate</button>
        </form>
    </body>
</html>

