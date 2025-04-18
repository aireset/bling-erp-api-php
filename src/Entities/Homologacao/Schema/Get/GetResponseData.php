<?php

namespace Aireset\BlingErpApi\Entities\Homologacao\Schema\Get;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GetResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?string $nome
     * @param ?float $preco
     * @param ?string $codigo
     */
    public function __construct(
        public ?string $nome,
        public ?float $preco,
        public ?string $codigo,
    ) {
    }
}
