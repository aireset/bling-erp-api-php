<?php

namespace Aireset\BlingErpApi\Entities\ProdutosVariacoes\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class FindResponseDataFornecedor extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $id
     * @param ?FindResponseDataFornecedorContato $contato
     * @param ?string $codigo
     * @param ?float $precoCusto
     * @param ?float $precoCompra
     */
    public function __construct(
        public ?int $id,
        public ?FindResponseDataFornecedorContato $contato,
        public ?string $codigo,
        public ?float $precoCusto,
        public ?float $precoCompra,
    ) {}
}
