<?php

namespace Aireset\BlingErpApi\Entities\Contatos\Schema\FindFinalCustomer;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

readonly final class FindFinalCustomerResponseDataFinanceiro extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?float $limiteCredito
     * @param ?string $condicaoPagamento
     * @param ?Id $categoria
     */
    public function __construct(
        public ?float $limiteCredito,
        public ?string $condicaoPagamento,
        public ?Id $categoria,
    ) {
    }
}
