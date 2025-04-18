<?php

namespace Aireset\BlingErpApi\Entities\Nfses\Schema\Create;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class CreateResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     * @param string $numeroRPS
     * @param string $serie
     */
    public function __construct(
        public int $id,
        public string $numeroRPS,
        public string $serie,
    ) {
    }
}
