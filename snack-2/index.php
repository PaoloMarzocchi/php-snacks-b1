<?php

$submitBtn = $_GET['submit'];
//var_dump($submitBtn);
$userInfo =[
    'userName' => $_GET['user-name'],
    'userMail' => $_GET['email'], 
    'userAge' => $_GET['age']
];

$flagUser = false;
$flagMail = false;
$flagAge = false;
//var_dump($userInfo);
if (is_string($submitBtn)) {

    foreach ($userInfo as $key => $item) {
        switch ($key) {
            case 'userName':
                if (strlen($item) > 3) {
                    $flagUser = true;
                }
                break;
            case 'userMail':
                if (str_contains($item,'.')&&str_contains($item,'@')) {
                    $flagMail = true;
                }
                break;
            case 'userAge':
                if (is_numeric($item)) {  
                    $flagAge = true;
                };
                break;
        }
        
    }

    if ($flagUser&&$flagMail&&$flagAge) {
        $response = 'Complimenti! Accesso riuscito!';
       }else {
        $response = 'Mi dispiace! Accesso negato!';
       }
}
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="user-name"> Nome: </label>
        <input type="text" name="user-name">
        <label for="email"> Email: </label>
        <input type="text" name="email" id="email">
        <label for="age"> Età: </label>
        <input type="text" name="age" id="age">
        <button type="submit" name="submit">Send</button>
    </form>
    <h4><?= $response ?></h4>
</body>
</html>