<?php

namespace Consome\Controller;

use Consome\Helper\RenderizadorHtml;

class FormularioInsercao implements InterfaceControladora
{
    use RenderizadorHtml;

    public function processaRequisicao(): void
    {
       
        echo $this->renderizaHtml('vendedores/formulario.php', [
            'titulo' => 'Novo Vendedor'
        ]);
    }
}