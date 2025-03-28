<?php

namespace Aireset\BlingErpApi\Entities\Produtos\Schema\Get;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GetResponseDataEstoque extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?float $saldoVirtualTotal
     */
    public function __construct(
        public ?float $saldoVirtualTotal
    ) {}
}
