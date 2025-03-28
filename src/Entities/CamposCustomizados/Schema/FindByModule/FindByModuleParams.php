<?php

namespace Aireset\BlingErpApi\Entities\CamposCustomizados\Schema\FindByModule;

use Aireset\BlingErpApi\Entities\Shared\DTO\Request\QueryParams;

/**
 * Parâmetros da busca de campos customizados por módulo.
 */
readonly final class FindByModuleParams extends QueryParams
{
    /**
     * Constrói o objeto.
     * 
     * @param ?int $pagina N° da página da listagem
     * @param ?int $limite Quantidade de registros que devem ser exibidos por página
     */
    public function __construct(
        public ?int $pagina = null,
        public ?int $limite = null
    ) {
        parent::__construct(objectToArray($this));
    }
}
