<?php

namespace Alura\DesignPattern\EstadoOrcamento;

use Alura\DesignPattern\Orcamento;

class Reprovado extends EstadoOrcamento
{

    public function calculaDescontoExtra (Orcamento  $orcamento) : float
    {
        throw  new \DomainException('Um orçamento reprovado não pode ter desconto extra');
    }

    public function finalizado(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new  Finalizado();
    }


}