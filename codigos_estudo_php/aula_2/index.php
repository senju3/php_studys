<?php
    include('class.php');
    $guilherme = new plusPessoa('Guilherme', 23, "Brasília", "SIM", "NÃO", "SIM");
    $guilherme->getName();
    $guilherme->getAge();
    $guilherme->isMarried();
    $guilherme->haveASon();
    $guilherme->haveAAnimal();
?>