<?php

class Personaje{
    public $nombre1;
    public $nombre2;
    public $vida;
    public $daño;
    public $evasion;

    public function __construct($nombre1, $nombre2, $daño, $evasion){
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
        $this->daño = $daño;
        $this->evasion = $evasion;
    }
    function atacar(){
        echo "Nombre $this->nombre1\nNombre del oponente $this->nombre2 \n";
        $respuesta1 = readline("Vida de $this->nombre1 : ");
        $respuesta2 = readline("Vida de $this->nombre2 : ");



        $daño = rand(10 ,100);#Deadpool
        $daño2 = rand(10 , 120);#Wolverine

        $vida_restante = $respuesta1 - $daño2;#daño a Deadpool
        $vida_restante2 = $respuesta2 - $daño;#daño a wolverine

        echo "$this->nombre2 le mete un Jab a $this->nombre1 y le quieta $daño2 \n";

        if($vida_restante <= 0){
            echo "$this->nombre1 a muerto \n";
        }
        elseif ($vida_restante > 0){
            echo "$this->nombre1 le queda de vida $vida_restante \n";
        }

        echo "$this->nombre1 le mete un Jab a $this->nombre2 y le quieta $daño \n";

        if($vida_restante2 <= 0){
            echo "$this->nombre2 a muerto \n";
        }
        elseif ($vida_restante2 > 0){
            echo "$this->nombre2 le queda de vida $vida_restante2 \n";

        }
    }
}


$correr = new Personaje("Deadpool","Wolverine",rand(10 ,120),25);
$correr -> atacar();