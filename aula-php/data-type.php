<?php
    //STRING 
    print "<h4>STRING</h4>";
    $exe1 = "Hello, World!";
    echo $exe1;

    //INTEGER
    print "<h4>INTEGER</h4>";
    $exe2 = 530;
    echo $exe2;

    //FLOAT
    print "<h4>FLOAT</h4>";
    $exe3 = 110.20;
    echo $exe3;

    //BOOLEAN
    $bonito = false;
    $feio = true;

    //ARRAY
    print "<h4>ARRAY</h4>";
    $carros = array("Fusca", "Comb", "Brasilia","Caravan");
    var_dump($carros);
    print "<br>";
    print "<br>";

    //OBJECT
    print "<h4>OBJECT</h4>";
    class Carro{
        public $cor;
        public $modelo;
        public function __construct($cor, $modelo){
            $this->cor = $cor;
            $this->modelo = $modelo;
        }
        public function mensagem(){
            return "O carro é: $this->cor e o modelo é: $this->modelo"; 
        }
    }

    $carro1 = new Carro("Preto","Fox");
    $carro2 = new Carro("Vermelho","Ferrari");
    echo $carro1->mensagem();
    print "<br>";
    print "<br>";
    echo $carro2->mensagem();

    //NULL
    print "<h4>NULL</h4>";
    $exe4 = null;
    var_dump($exe4);
?>