<?php

namespace Aireset\BlingErpApi\Entities\Estoques\Schema\FindBalance;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

readonly final class FindBalanceResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?Id $produto
     * @param ?float $saldoFisicoTotal
     * @param ?float $saldoVirtualTotal
     */
    public function __construct(
        public ?Id $produto,
        public ?float $saldoFisicoTotal,
        public ?float $saldoVirtualTotal,
    ) {
    }
}
