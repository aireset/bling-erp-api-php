<?php

namespace Aireset\BlingErpApi\Entities\CamposCustomizados\Schema\FindByModule;

use Aireset\BlingErpApi\Entities\CamposCustomizados\Enum\Situacao;
use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class FindByModuleResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     * 
     * @param int $id
     * @param string $nome
     * @param ?Situacao $situacao
     */
    public function __construct(
        public int $id,
        public string $nome,
        public ?Situacao $situacao,
    ) {
    }
}
