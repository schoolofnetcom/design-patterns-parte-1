<?php

require_once "./ComidaFactory.php";
require_once "./Pizza.php";

class PizzaFactory implements ComidaFactory{
    public function criarComida($id) : Comida{
        if($id == 0){
            // Pizza de calabresa
            $p = new Pizza();
            $p->nome = "Pizza de calabresa com frango!";
            $p->sabor1 = "Calabresa!";
            $p->sabor2 = "Frango";
            $p->comPalmito = false;
            $p->bordaComRecheio = true;
            return $p;
        }else if($id == 1){
            // Pizza de frango
            $p = new Pizza();
            $p->nome = "Pizza de frango";
            $p->sabor1 = "Frango!";
            $p->sabor2 = "Queijo";
            $p->comPalmito = true;
            $p->bordaComRecheio = true;
            return $p;
        }else{
            // Pizza mista
            $p = new Pizza();
            $p->nome = "Pizza mista";
            $p->sabor1 = "Presunto";
            $p->sabor2 = "Queijo";
            $p->comPalmito = false;
            $p->bordaComRecheio = true;
            return $p;
        }
    }
}