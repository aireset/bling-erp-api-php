<?php

namespace Aireset\BlingErpApi\Entities\OrdensDeProducao\Schema\Get;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GetResponseDataSituacao extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     * @param int $valor
     * @param string $nome
     */
    public function __construct(
        public int $id,
        public int $valor,
        public string $nome,
    ) {}
}
