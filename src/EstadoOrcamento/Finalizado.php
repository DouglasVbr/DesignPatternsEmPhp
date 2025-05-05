<?php

namespace Alura\DesignPattern\EstadoOrcamento;

class Finalizado extends EstadoOrcamento
{

    public function calculaDescontoExtra (Orcamento  $orcamento) : float
    {
        throw  new \DomainException('Um orçamento Finalizado não pode ter desconto extra');
    }

}