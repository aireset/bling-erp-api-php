<?php

namespace Aireset\BlingErpApi\Entities\ProdutosVariacoes\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class FindResponseDataVariacoesVariacao extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param string $nome
     * @param int $ordem
     * @param FindResponseDataVariacoesVariacaoProdutoPai $produtoPai
     */
    public function __construct(
        public string $nome,
        public int $ordem,
        public FindResponseDataVariacoesVariacaoProdutoPai $produtoPai,
    ) {
    }
}
