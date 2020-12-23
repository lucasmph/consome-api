<?php

namespace Consome\Controller;

use Consome\Controller\InterfaceControladora;
use Consome\Helper\FlashMessageTrait;
use Consome\Helper\RealizadorRequisicao;
use Consome\Helper\RenderizadorHtml;

class InserirVendedor implements InterfaceControladora
{
    use RealizadorRequisicao;
    use FlashMessageTrait;
    use RenderizadorHtml;

    public function processaRequisicao(): void
    {
        $nome = filter_input(
            INPUT_POST, 
            'nome',
            FILTER_SANITIZE_STRING
        );
        $email = filter_input(
            INPUT_POST, 
            'email',
            FILTER_VALIDATE_EMAIL
        );

        if (is_null($nome) || $nome === false){
            $this->defineMensagem('danger', 'Nome precisa ser preenchido.');
            header('Location: /consome-api/listar-vendedores');
            return;
        }
        if(is_null($email) || $email === false){
            $this->defineMensagem('danger', 'Email precisa ser preenchido.');
            header('Location: /consome-api/listar-vendedores');
            return;
        }

        $param = json_encode(["nome" => $nome, "email" => $email]);
        $url = 'http://localhost/tray-api/vendedor';
        $vendedor = json_decode($this->requisicaoPost($url, $param), true);
        if($vendedor){
            echo $this->renderizaHtml('vendedores/vendedor-criado.php', [
                'vendedor' => $vendedor,
                'titulo' => 'Vendedor'
            ]);
            return;
        }

        $this->defineMensagem('danger', 'Problema ao criar um vendedor');
            header('Location: /consome-api/listar-vendedores');
        }
}