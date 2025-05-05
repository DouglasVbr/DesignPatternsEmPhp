<?php

namespace Alura\DesignPattern\EstadoOrcamento;

 use Alura\DesignPattern\Orcamento;

 abstract class EstadoOrcamento
{

     /**
      * @throws \DomainException
      */

    abstract public function calculaDescontoExtra (Orcamento  $orcamento) : float;

    public function Aprova( Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento não pode ser aprovado');
    }
    public function Reprovado(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento não pode ser reprovado');
    }

    public function Finalizado(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento não pode ser finalizado');
    }


}