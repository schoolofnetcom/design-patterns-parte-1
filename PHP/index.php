<?php 
require_once "./PizzaFactory.php";

$fabrica = new PizzaFactory();

var_dump($fabrica->criarComida(0));