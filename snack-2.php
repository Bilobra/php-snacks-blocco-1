<!-- Snack 2
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione)
 che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$email = $_GET['email'];
$atElement = strpos($email, '@');
$dotElement = strpos($email, '.');

$name = $_GET['name'];
$checkName = strlen($name);

$age = $_GET['age'];
$checkAge = is_numeric($age);

if($checkName >= 3 && $atElement != false && $dotElement != false && $checkAge) {
    $msg = 'accesso riuscito';
}else{
    $msg = 'accesso negato';
}


?>

<div>
    <?= $msg; ?>
    <ul>
        <li>
        <?= $email; ?>
        </li>
        <li>
        <?= $age; ?>
        </li><li>
        <?= $name; ?>
        </li>
    </ul>
   


</div>