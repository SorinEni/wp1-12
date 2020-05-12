<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$birthyear = filter_input(INPUT_POST, 'birthyear');
$age = date('Y') - $birthyear;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>Formulář byl odeslán</p>
    <ul>
        <li>Jméno a přijmení <?=$firstname, $lastname ?></li>
        <li>Rok narození  <?=$birthyear ?></li>
        <li>Věk <?=$age ?></li>
    </ul>


</body>
</html>