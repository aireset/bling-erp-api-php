<?php

namespace Aireset\BlingErpApi\Entities\Contatos\Schema\FindFinalCustomer;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class FindFinalCustomerResponseDataTiposContato extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     * @param ?string $descricao
     */
    public function __construct(
        public int $id,
        public ?string $descricao,
    ) {
    }
}
