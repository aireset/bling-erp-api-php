<?php

namespace Aireset\BlingErpApi\Entities\ContasReceber\Schema\GetBankSlips;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GetBankSlipsResponseNotaFiscal extends BaseResponseObject
{
    /** 
     * Constrói o objeto.
     *
     * @param string $numero
     */
    public function __construct(
        public string $numero,
    ) {}
}
