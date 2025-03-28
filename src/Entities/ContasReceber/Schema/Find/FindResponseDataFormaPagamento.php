<?php

namespace Aireset\BlingErpApi\Entities\ContasReceber\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\ContasReceber\Enum\CodigoFiscal;

readonly final class FindResponseDataFormaPagamento extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     * @param ?CodigoFiscal $codigoFiscal
     */
    public function __construct(
        public int $id,
        public ?CodigoFiscal $codigoFiscal,
    ) {
    }
}
