<?php

namespace Aireset\BlingErpApi\Entities\ProdutosVariacoes\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class FindResponseDataMidiaImagensExternas extends BaseResponseObject
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
