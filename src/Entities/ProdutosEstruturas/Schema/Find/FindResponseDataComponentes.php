<?php

namespace Aireset\BlingErpApi\Entities\ProdutosEstruturas\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

readonly final class FindResponseDataComponentes extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param Id $produto
     * @param float $quantidade
     */
    public function __construct(
        public Id $produto,
        public float $quantidade,
    ) {
    }
}
