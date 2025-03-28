<?php

namespace Aireset\BlingErpApi\Entities\PedidosVendas\Schema\Update;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class UpdateResponseDataRastreamento extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?string $description
     */
    public function __construct(
        public ?string $description,
    ) {
    }
}
