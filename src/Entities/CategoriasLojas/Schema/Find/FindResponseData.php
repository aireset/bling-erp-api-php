<?php

namespace Aireset\BlingErpApi\Entities\CategoriasLojas\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

readonly final class FindResponseData extends BaseResponseObject
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
