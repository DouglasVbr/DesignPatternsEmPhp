<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class CriarPedidoNoBanco implements AcaoAposGerarPedido
{
public function execultaAcao(Pedido $pedido) : void
    {
        echo "Salvando pedido no banco de dados";
    }
}