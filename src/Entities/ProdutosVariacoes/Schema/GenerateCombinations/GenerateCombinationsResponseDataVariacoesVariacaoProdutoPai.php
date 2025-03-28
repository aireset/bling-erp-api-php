<?php

namespace Aireset\BlingErpApi\Entities\ProdutosVariacoes\Schema\GenerateCombinations;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GenerateCombinationsResponseDataVariacoesVariacaoProdutoPai extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param bool $cloneInfo
     */
    public function __construct(
        public bool $cloneInfo
    ) {
    }
}
