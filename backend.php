<?php
session_start();

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

if($name && $email && $age){
    echo "NOME: ".$name ."<br/>";
    echo "EMAIL: ".$email ."<br/>";
    echo "IDADE: ".$age ."<br/>";

    setcookie('name', $name, time() + 10);
}
else{
    $_SESSION['alert'] = 'Preencha os itens corretamente';

    header("Location: index.php");
    exit;
}

?>