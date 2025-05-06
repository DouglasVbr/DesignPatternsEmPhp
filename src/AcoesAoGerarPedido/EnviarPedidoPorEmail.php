<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class EnviarPedidoPorEmail
{

    public function execultaAcao(Pedido $pedido) : void
    {
        echo "Enviando Email de Pedido Gerado";
    }

}