<?php

namespace Aireset\BlingErpApi\Entities\OrdensDeProducao\Schema\Get;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GetResponseDataDeposito extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $idDestino
     * @param ?int $idOrigem
     */
    public function __construct(
        public ?int $idDestino,
        public ?int $idOrigem,
    ) {}
}
