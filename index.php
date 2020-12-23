<?php
require 'autoload.php';

session_start();

$caminho = $_SERVER['REDIRECT_URL'];
if($caminho == '/consome-api' || $caminho == ''){
    $caminho .= '/listar-vendedores';    
}

$url = str_replace('/consome-api', '', $caminho);


$rotas = require __DIR__.'/src/config/routes.php';

$classeControladora = $rotas[$url];
/**
 * @var InterfaceControladorRequisicao
 */
$controlador =  new $classeControladora();
$controlador->processaRequisicao();