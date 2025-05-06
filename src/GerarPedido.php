<?php

namespace Alura\DesignPattern;

class GerarPedido
{

    private float $valorOrcamento;
    private int $numeroItens;
    private string $nomeCliente;

public function __construct(
    float $valorOrcamento,
    int $numeroItens,
    string $nomeCliente
    ) {

    $this->valorOrcamento = $valorOrcamento;
    $this->numeroItens = $numeroItens;
    $this->nomeCliente = $nomeCliente;


    }

    public function getValorOrcamento(): float
    {
        return $this->valorOrcamento;
    }

    public function getNumeroItens(): int
    {
        return $this->numeroItens;

    }

    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function execultar()
    {
        // Criação do orçamento
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $this->numeroItens;
        $orcamento->valor = $this->valorOrcamento;

        // Criação do pedido
        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeDoCliente = $this->nomeCliente;
        $pedido->orcamento = $orcamento;


        echo "cria pedido no banco de dados" . PHP_EOL;
        echo "Enviar email para o cliente" . PHP_EOL;
    }



}
