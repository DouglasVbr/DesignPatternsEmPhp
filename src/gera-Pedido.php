<?php

require_once __DIR__ . '/vendor/autoload.php';


use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeDoCliente = $argv[3];

$orcamento = new Orcamento();
$orcamento->quantidadeItens = $numeroDeItens;
$orcamento->valor = $valorOrcamento;

$pedido = new Pedido();
$pedido->dataFinalizacao = new DateTime();
$pedido->nomeDoCliente = $nomeDoCliente;
$pedido->orcamento = $orcamento;

echo "cria pedido no banco de dados" . PHP_EOL;
echo "Enviar email para o cliente" . PHP_EOL;
