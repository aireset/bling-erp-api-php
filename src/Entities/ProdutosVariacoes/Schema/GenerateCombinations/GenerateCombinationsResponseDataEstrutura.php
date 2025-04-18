<?php

namespace Aireset\BlingErpApi\Entities\ProdutosVariacoes\Schema\GenerateCombinations;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\ProdutosVariacoes\Enum\TipoEstoque;
use Aireset\BlingErpApi\Entities\ProdutosVariacoes\Enum\LancamentoEstoque;

readonly final class GenerateCombinationsResponseDataEstrutura extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param TipoEstoque $tipoEstoque
     * @param LancamentoEstoque $lancamentoEstoque
     * @param GenerateCombinationsResponseDataEstruturaComponentes[] $componentes
     */
    public function __construct(
        public TipoEstoque $tipoEstoque,
        public LancamentoEstoque $lancamentoEstoque,
        public array $componentes,
    ) {
    }

    /**
     * @inheritDoc
     */
    protected static function fromRules(): array
    {
        return [
            'componentes' => GenerateCombinationsResponseDataEstruturaComponentes::class
        ];
    }
}
