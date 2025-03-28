<?php

namespace Aireset\BlingErpApi\Entities\PedidosCompras\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

readonly final class FindResponseDataParcelas extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param float $valor
     * @param string $dataVencimento
     * @param ?string $observacao
     * @param ?Id $formaPagamento
     */
    public function __construct(
        public float $valor,
        public string $dataVencimento,
        public ?string $observacao,
        public ?Id $formaPagamento,
    ) {
    }
}
