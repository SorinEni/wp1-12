
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="submit.php" method="post">

    <label for="i-firstname"> Křestní jméno </label>
    <input type="text" name="firstname" id="i-firstname"> 
    <br>
    <label for="i-lastname">Přijmení </label>
    <input type="text" name="lastname" id="i-lastname"> 
    <br>
    <label for="i-birthyear">Rok narození </label>
    <input type="number" min="1900" max="2020" name="birthyear" id="i-birthyear"> 
    <br>
    
    <input type="submit" value="Odeslat"> 
    </form>

</body>
</html>