<?php

class Pagamento{
    public static function pagarComCartao($valor){
        echo "Pago com o cartão! ".$valor;
    }

    public static function pagarComBoleto($valor){
        echo "Pago com o boleto! ".$valor;
    }
}