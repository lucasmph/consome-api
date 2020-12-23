<?php

namespace Consome\Controller;

use Consome\Controller\InterfaceControladora;
use Consome\Helper\FlashMessageTrait;
use Consome\Helper\RealizadorRequisicao;
use Consome\Helper\RenderizadorHtml;

class InserirVenda implements InterfaceControladora
{
    use RealizadorRequisicao;
    use FlashMessageTrait;
    use RenderizadorHtml;

    public function processaRequisicao(): void
    {
        $valor = filter_input(
            INPUT_POST, 
            'valor',
            FILTER_SANITIZE_STRING
        );
        $id =  filter_input(
            INPUT_POST, 'id', 
            FILTER_VALIDATE_INT
        );

        if (is_null($valor) || $valor === false){
            $this->defineMensagem('danger', 'Valor precisa ser preenchido.');
            header('Location: /consome-api/listar-vendedores');
            return;
        }
        if(is_null($id) || $id === false){
            $this->defineMensagem('danger', 'Vendedor não encontrado.');
            header('Location: /consome-api/listar-vendedores');
            return;
        }

        $param = json_encode(["id_vendedor" => $id, "valor" => $valor]);
        $url = 'http://localhost/tray-api/venda';
        $venda = json_decode($this->requisicaoPost($url, $param), true);
        if($venda){
            echo $this->renderizaHtml('vendas/venda-lancada.php', [
                'venda' => $venda,
                'titulo' => 'Venda Lançada'
            ]);
            return;
        }

        $this->defineMensagem('danger', 'Problema ao criar um vendedor');
            header('Location: /consome-api/listar-vendedores');
        }
}