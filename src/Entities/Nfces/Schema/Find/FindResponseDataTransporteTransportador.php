<?php

namespace Aireset\BlingErpApi\Entities\Nfces\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class FindResponseDataTransporteTransportador extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param string $nome
     * @param ?string $numeroDocumento
     */
    public function __construct(
        public string $nome,
        public ?string $numeroDocumento,
    ) {}
}
