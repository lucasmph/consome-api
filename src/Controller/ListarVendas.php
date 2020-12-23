<?php

namespace Consome\Controller;

use Consome\Helper\FlashMessageTrait;
use Consome\Helper\RealizadorRequisicao;
use Consome\Helper\RenderizadorHtml;

class ListarVendas implements InterfaceControladora
{
    use RealizadorRequisicao;
    use RenderizadorHtml;
    use FlashMessageTrait;

    public function processaRequisicao(): void
    {
        $id =  filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $param = json_encode(["id_vendedor" => $id]);

        if (is_null($id) || $id === false){
            $this->defineMensagem('danger', 'Curso não encontrado.');
            header('Location: /listar-vendedores');
            return;
        }

        $url = 'http://localhost/tray-api/vendedor/vendas';
        $vendas = json_decode($this->requisicaoGet($url, $param), true);
        echo $this->renderizaHtml('vendas/listar-vendas.php', [
            'vendas' => $vendas,
            'titulo' => 'Vendas'
        ]);
    }
}