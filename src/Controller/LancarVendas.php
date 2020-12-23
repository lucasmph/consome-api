<?php

namespace Consome\Controller;

use Consome\Helper\FlashMessageTrait;
use Consome\Helper\RealizadorRequisicao;
use Consome\Helper\RenderizadorHtml;

class LancarVendas implements InterfaceControladora
{
    use RealizadorRequisicao;
    use RenderizadorHtml;
    use FlashMessageTrait;

    public function processaRequisicao(): void
    {
        $id =  filter_input(
            INPUT_GET, 
            'id', 
            FILTER_VALIDATE_INT
        );

        if (is_null($id) || $id === false){
            $this->defineMensagem('danger', 'Vendedor não encontrado.');
            header('Location: /listar-vendedores');
            return;
        }
        echo $this->renderizaHtml('vendas/lancar-venda.php', [
            'id' => $id,
            'titulo' => 'Lançar Venda'
        ]);
    }
}