<?php

namespace Alura\DesignPattern\EstadoOrcamento;

use Alura\DesignPattern\Orcamento;

class Aprovado extends EstadoOrcamento
{

    public function calculaDescontoExtra (Orcamento  $orcamento) : float
    {
       return $orcamento->valor * 0.02;
    }

    public function finalizado(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new  Finalizado();
    }

}