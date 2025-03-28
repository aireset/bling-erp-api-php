<?php

namespace Aireset\BlingErpApi\Entities\Produtos\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class FindResponseDataEstoque extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?float $minimo
     * @param ?float $maximo
     * @param ?int $crossdocking
     * @param ?string $localizacao
     * @param ?float $saldoVirtualTotal
     */
    public function __construct(
        public ?float $minimo,
        public ?float $maximo,
        public ?int $crossdocking,
        public ?string $localizacao,
        public ?float $saldoVirtualTotal,
    ) {}
}
