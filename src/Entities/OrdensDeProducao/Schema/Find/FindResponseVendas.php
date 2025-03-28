<?php

namespace Aireset\BlingErpApi\Entities\OrdensDeProducao\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class FindResponseVendas extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $numero
     * @param ?FindResponseVendasContato $contato
     */
    public function __construct(
        public ?int $numero,
        public ?FindResponseVendasContato $contato,
    ) {}
}
