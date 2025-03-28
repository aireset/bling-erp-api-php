<?php

namespace Aireset\BlingErpApi\Entities\ProdutosEstruturas\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\ProdutosEstruturas\Enum\TipoEstoque;
use Aireset\BlingErpApi\Entities\ProdutosEstruturas\Enum\LancamentoEstoque;

readonly final class FindResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param TipoEstoque $tipoEstoque
     * @param LancamentoEstoque $lancamentoEstoque
     * @param FindResponseDataComponentes[] $componentes
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
            'componentes' => FindResponseDataComponentes::class,
        ];
    }
}
