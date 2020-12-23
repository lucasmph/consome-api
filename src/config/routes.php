<?php

use Consome\Controller\FormularioInsercao;
use Consome\Controller\InsereVendedor;
use Consome\Controller\InserirVenda;
use Consome\Controller\InserirVendedor;
use Consome\Controller\LancarVendas;
use Consome\Controller\ListarVendas;
use Consome\Controller\ListarVendedores;

$rotas = [
    '/listar-vendedores' => ListarVendedores::class,
    '/listar-vendas'     => ListarVendas::class,
    '/novo-vendedor'     => FormularioInsercao::class,
    '/salvar-vendedor'   => InserirVendedor::class,
    '/lancar-venda'      => LancarVendas::class,
    '/insere-venda'      => InserirVenda::class
];

return $rotas;