<?php

namespace Aireset\BlingErpApi\Entities\CanaisDeVenda\Schema\GetTypes;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\CanaisDeVenda\Enum\Agrupador;

readonly final class GetTypesResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?string $nome
     * @param ?string $tipo
     * @param ?Agrupador $agrupador
     */
    public function __construct(
        public ?string $nome,
        public ?string $tipo,
        public ?Agrupador $agrupador,
    ) {
    }
}
