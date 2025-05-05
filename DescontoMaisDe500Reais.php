<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class DescontoMaisDe500Reais extends Desconto
{
    public function CalculaDesconto(Orcamento $orcamento): float
    {

        if($orcamento->quantidadeItens > 5){
            return $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto->CalculaDesconto($orcamento);
    }

}