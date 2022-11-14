
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
<?php
    echo "blim bom"; /* pelo que eu entendi o php permite usar o front-end dentro do back-end */
    echo '<br>';
    /*********** VARIÁVEL ***********/
    $name = 'Pedro';        
    /*********** CONSTÂNTE ***********/
    define("sobrenome", "Bueno"); 
    echo $name; /* expected output: Pedro */
    echo '<br>';
    /*********** CONCATENAÇÃO ***********/
    echo $name." ".sobrenome; /* expected output: Pedro Bueno */
    echo '<br>';


    /*********** ARRAY ***********/
    $frutas = ["Abacaxi", "Manga", "Melancia"]; 
    /* OU */ 
    $frutas2 = array("Abacaxi", "Limão", "Melancia");
    /* OU */
    $informacao['fruta'] = "Abacaxi";
    $informacao['price'] = 3;
    echo $frutas[0]; /* expected output: Abacaxi */
    echo '<br>';
    echo $frutas2[1];/* expected output: Limão */
    echo '<br>' ;
    echo $informacao['fruta']; 
    echo '<br>';
    echo $informacao['price'];
    echo '<br>';
    /* expected output:
        Abacaxi
        3
    */
    
    /*************** FUNÇÕES + CONDIÇÕES + LOOPINGS ***************/
    function checkName ($name){
        if($name != null){
            echo $name;
            echo '<br>';
        }else{ 
            echo "tente outra vez";
        };
    };
    checkName('Pedro');
    
    $produtos = ['TV', 'notebook', 'sofá'];
    foreach($produtos as $key => $value){
        echo "<br>";
        echo $key, ' - ', $value;
        echo '<hr>';
    };
    
    for($i = 0; $i < 10; $i++){
        echo "Estou dentro de um loop e vou ser repetido 10x: ".$i;
        echo '<br>';
    };

    $i = 0;
    while($i < 10){
        $i++;
        echo "estudando";
        echo '<br>';
    };

    /*************** FORMULÁRIO ***************/
    if(isset($_POST['acao'])){
        echo $_POST['email'], ' ', $_POST['name'];
        echo '<br>';
    }
?>
    <p></p>
    <form action="" method="post">
        <input type="email" name="email">
        <input type="text" name="name">
        <button type="submit" name="acao">Enviar</button>
    </form>
</body>
</html>
