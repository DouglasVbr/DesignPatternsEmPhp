<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

//$calculadora = new calculadoraDeImpostos();
//
//$orcamento = new Orcamento();
//$orcamento->valor = 100;
//
//echo $calculadora->calcula($orcamento, new Icms());

$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600 ;
$orcamento->quantidadeItens = 5;


echo $calculadora->CalculaDesconto($orcamento);
