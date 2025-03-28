<?php

namespace Aireset\BlingErpApi\Entities\OrdensDeProducao\Schema\GenerateOverDemand;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GenerateOverDemandResponseDataItens extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?GenerateOverDemandResponseDataItensProduto $produto
     * @param ?float $quantidade
     */
    public function __construct(
        public ?GenerateOverDemandResponseDataItensProduto $produto,
        public ?float $quantidade,
    ) {}
}
