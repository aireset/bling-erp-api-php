<?php

namespace Aireset\BlingErpApi\Entities\PedidosCompras\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\PedidosCompras\Enum\FretePorConta;

readonly final class FindResponseDataTransporte extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?float $frete
     * @param ?string $transportador
     * @param ?FretePorConta $fretePorConta
     * @param ?float $pesoBruto
     * @param ?int $volumes
     */
    public function __construct(
        public ?float $frete,
        public ?string $transportador,
        public ?FretePorConta $fretePorConta,
        public ?float $pesoBruto,
        public ?int $volumes,
    ) {
    }
}
