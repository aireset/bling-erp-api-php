<?php

namespace Aireset\BlingErpApi\Entities\OrdensDeProducao\Schema\GenerateOverDemand;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GenerateOverDemandResponseDataItensProduto extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     * @param ?string $nome
     * @param ?string $codigo
     */
    public function __construct(
        public int $id,
        public ?string $nome,
        public ?string $codigo,
    ) {}
}
