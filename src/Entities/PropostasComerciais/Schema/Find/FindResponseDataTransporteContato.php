<?php

namespace Aireset\BlingErpApi\Entities\PropostasComerciais\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class FindResponseDataTransporteContato extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $id
     * @param ?string $nome
     */
    public function __construct(
        public ?int $id,
        public ?string $nome,
    ) {}
}
