<?php

namespace Aireset\BlingErpApi\Entities\ProdutosVariacoes\Schema\GenerateCombinations;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GenerateCombinationsResponseDataMidiaVideo extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param string $url
     */
    public function __construct(
        public string $url,
    ) {
    }
}
