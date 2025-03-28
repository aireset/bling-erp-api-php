<?php

namespace Aireset\BlingErpApi\Entities\PedidosVendas\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class FindResponseDataTributacao extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?float $totalICMS
     * @param ?float $totalIPI
     */
    public function __construct(
        public ?float $totalICMS,
        public ?float $totalIPI,
    ) {
    }
}
