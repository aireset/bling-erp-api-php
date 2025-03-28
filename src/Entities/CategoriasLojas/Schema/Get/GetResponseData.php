<?php

namespace Aireset\BlingErpApi\Entities\CategoriasLojas\Schema\Get;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

readonly final class GetResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $id
     * @param Id $loja
     * @param string $descricao
     * @param string $codigo
     * @param Id $categoriaProduto
     */
    public function __construct(
        public ?int $id,
        public Id $loja,
        public string $descricao,
        public string $codigo,
        public Id $categoriaProduto,
    ) {
    }
}
