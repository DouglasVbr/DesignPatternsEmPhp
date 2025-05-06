<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;

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

        $pedidosRepository = new CriarPedidoNoBanco();
        $logGerarPedido = new LogGerarPedido();
        $enviarPedidoPorEmail = new EnviarPedidoPorEmail();

        $pedidosRepository->execultaAcao($pedido);
        $logGerarPedido->execultaAcao($pedido);
        $enviarPedidoPorEmail->execultaAcao($pedido);

    }
}