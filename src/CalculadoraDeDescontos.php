<?php

namespace Alura\DesignPattern;

class CalculadoraDeDescontos
{
    public function CalculaDesconto(Orcamento $orcamento): float
    {

        if($orcamento->quantidadeItens > 5){
            return $orcamento->valor * 0.01;
        }

        return 0;
        
    }
}