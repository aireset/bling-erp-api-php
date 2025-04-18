<?php

namespace Aireset\BlingErpApi\Entities\ContasReceber\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class FindResponseDataContato extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     * @param ?string $nome
     * @param ?string $numeroDocumento
     * @param ?string $tipo
     */
    public function __construct(
        public int $id,
        public ?string $nome,
        public ?string $numeroDocumento,
        public ?string $tipo,
    ) {
    }
}
