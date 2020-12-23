<?php

namespace Consome\Controller;

use Consome\Helper\RealizadorRequisicao;
use Consome\Helper\RenderizadorHtml;

class ListarVendedores implements InterfaceControladora
{
    use RenderizadorHtml;
    use RealizadorRequisicao;

    public function processaRequisicao(): void
    {
        $url = 'http://localhost/tray-api/vendedor/';
        $vendedores = json_decode($this->requisicaoGet($url, null), true);
        echo $this->renderizaHtml('vendedores/listar-vendedores.php', [
            'vendedores' => $vendedores,
            'titulo' => 'Lista de vendedores'
        ]);
    }
}