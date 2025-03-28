<?php

namespace Aireset\BlingErpApi\Entities\CategoriasReceitasDespesas\Schema\Get;

use Aireset\BlingErpApi\Entities\CategoriasReceitasDespesas\Enum\Tipo;
use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GetResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $id
     * @param ?int $idCategoriaPai
     * @param string $descricao
     * @param Tipo $tipo
     */
    public function __construct(
        public ?int $id,
        public ?int $idCategoriaPai,
        public string $descricao,
        public Tipo $tipo,
    ) {
    }
}
