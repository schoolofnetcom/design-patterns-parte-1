<?php

class GovernoSingleton{
  /* Campos */

  public $nomeDoPais = "Brasil";
  public $proximaEleicao = "2022";

  public function realizarEleicao(){
      echo "Realizando...<br>";
  }

  /* Estrutura */  
  private static $instancia = null;  
  private function __construct(){}
  private function __clone(){} 
  public static function pegarInstancia(){
      if(self::$instancia == null){
          self::$instancia = new GovernoSingleton();
      }
      return self::$instancia;
  }
}