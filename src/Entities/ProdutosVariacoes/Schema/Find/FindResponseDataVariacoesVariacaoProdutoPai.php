<?php

namespace Aireset\BlingErpApi\Entities\ProdutosVariacoes\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class FindResponseDataVariacoesVariacaoProdutoPai extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $id
     * @param bool $cloneInfo
     */
    public function __construct(
        public ?int $id,
        public bool $cloneInfo
    ) {}
}
