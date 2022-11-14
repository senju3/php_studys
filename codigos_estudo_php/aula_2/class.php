<?php
    class Pessoa {
        public $name;
        public $age;
        public $city;
        function __construct($name, $idade, $cidade){
            $this->$name = $name;
            $this->$age = $idade;
            $this->$city = $cidade;
        }

        Public function getName(){
            return $this->$name; 
        }
        Public function getAge(){
            return $this->$age; 
        }
        Public function getCity(){
            return $this->$city;
        }
    };

    class PlusPessoa extends Pessoa {
        public $married;
        public $sons;
        public $animal;
        function __construct($name, $idade, $cidade, $married, $sons, $animal){
            parent::__construct($name, $idade, $cidade);
            $this->$married = $married;
            $this->$sons = $sons;
            $this-$animal = $animal;
        }
        Public function isMarried(){
            return $this->$married; 
        }
        Public function haveASon(){
            return $this->$sons;
        }
        Public function haveAAnimal(){
            return $this->$animal;
        }
    } 
?>