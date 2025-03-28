<?php

namespace Aireset\BlingErpApi\Entities\PedidosVendas\Schema\DeleteMany;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class DeleteManyResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?string[] $alertas
     */
    public function __construct(
        public array $alertas,
    ) {
    }
}
