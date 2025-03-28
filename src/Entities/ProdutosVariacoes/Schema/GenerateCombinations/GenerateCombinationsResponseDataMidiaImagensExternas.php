<?php

namespace Aireset\BlingErpApi\Entities\ProdutosVariacoes\Schema\GenerateCombinations;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GenerateCombinationsResponseDataMidiaImagensExternas extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param string $link
     */
    public function __construct(
        public string $link,
    ) {
    }
}
