<?php

namespace Aireset\BlingErpApi\Entities\GruposDeProdutos\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class FindResponseDataGrupoProdutoPai extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     * @param ?string $nome
     */
    public function __construct(
        public int $id,
        public ?string $nome,
    ) {}
}
