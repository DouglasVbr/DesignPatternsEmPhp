<?php

namespace Alura\DesignPattern;

class GerarPedidoHandler
{
public function __construct(/*PedidoRepository, MailService*/)
    {

    }

    public function execultar(GerarPedido $gerarPedido)

    {
        // Criação do orçamento
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        // Criação do pedido
        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeDoCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        // PedidosRepository
        echo "cria pedido no banco de dados" . PHP_EOL;
        // MailService
        echo "Enviar email para o cliente" . PHP_EOL;
        echo "Gerar log de criação de pedido" . PHP_EOL;

    }
}