<?php

require_once __DIR__ . '/vendor/autoload.php';


use Alura\DesignPattern\GerarPedido;
use Alura\DesignPattern\GerarPedidoHandler;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeDoCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeDoCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->execultar($gerarPedido);
