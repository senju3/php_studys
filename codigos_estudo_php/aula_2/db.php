<?php
    $pdo = new PDO("mysql:host=localhost;dbname=studys", 'root', '123456');
    date_default_timezone_set('America/Sao_Paulo');

    if(isset($_POST['submit']) && isset($_POST['submit2'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $moment_to_register = date('Y-m-d H:i:s')

        $married = $_POST['married'];
        $son = $_POST['son'];
        $animal = $_POST['animal'];

        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES(null, ?, ?, ?, ?)")
        $sql->execute(array($name, $email, $city, $moment_to_register))
        echo 'cliente cadastrado'
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" require>
        <input type="email" name="email" require>
        <input type="text" name="city" require>
        <button type="submit" name="submit">Enviar</button>
    </form>
    <form action="" method="post">
        <label for="married">Você é casado?</label>
        <input type="checkbox" name="married" require>
        <label for="son">Você tem filhos?</label>
        <input type="checkbox" name="son" require>
        <label for="animal">Você tem animais em casa?</label>
        <input type="checkbox" name="animal" require>
        <button type="submit" name="submit2">Enviar</button>
    </form>
</body>
</html>