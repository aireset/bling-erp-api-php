<?php

namespace Aireset\BlingErpApi\Entities\FormasDePagamentos\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class FindResponseDataTaxas extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?float $aliquota
     * @param ?float $valor
     * @param ?int $prazo
     */
    public function __construct(
        public ?float $aliquota,
        public ?float $valor,
        public ?int $prazo,
    ) {
    }
}
