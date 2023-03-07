<?php 
    $login = '';
    $alert = '';
    if(isset($_COOKIE['name'])){
        $login = 'Olá, '.$_COOKIE['name'];
        
    }

    session_start();
    if(isset($_SESSION['alert'])){
        $alert = $_SESSION['alert'];
        $_SESSION['alert'] = '';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando forms</title>

    <style>
        body{
            height: 100vh;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        input{
            width: 500px;
            height: 30px;
            font-size: 16px;
            margin-bottom: 30px;
        }
        label{
            font-weight: 600;
        }

        button{
            margin-top: 20px;
            margin-left: 350px;
            width: 200px;
            height: 30px;
        }
    </style>
</head>
<body>
    <div>
        <p><?php echo $login; ?></p>
        <p><?php echo $alert; ?></p>
        
        <h1>Formulário de textes</h1>
        
        <form method="POST" action="backend.php">
            <label>Nome</label>
            <input type="text" name="name" placeholder="Digite seu nome"/>
            <br/>
            <label>Email</label>
            <input type="email" name="email" placeholder="Digite seu email"/>
            <br/>
            <label>Idade</label>
            <input type="number" name="age" placeholder="Digite sua idade"/>
            <br/>
            <button>Enviar</button>
        </form>
    </div> 
</body>
</html>