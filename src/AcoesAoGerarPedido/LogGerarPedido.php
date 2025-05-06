<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class LogGerarPedido
{

    public function execultaAcao(Pedido $pedido) : void
    {
        echo "Gerando log de Geração de pedido";
    }

}