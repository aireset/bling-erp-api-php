<?php

namespace Aireset\BlingErpApi\Entities\Contratos\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class FindResponseDataVendedorComissao extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param float $aliquota
     * @param int $numeroParcelas
     */
    public function __construct(
        public float $aliquota,
        public int $numeroParcelas,
    ) {
    }
}
