<?php

namespace Aireset\BlingErpApi\Entities\OrdensDeProducao\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class FindResponseSituacao extends BaseResponseObject
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
