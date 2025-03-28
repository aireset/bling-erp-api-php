<?php

namespace Aireset\BlingErpApi\Entities\PedidosVendas\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

readonly final class FindResponseDataParcelas extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     * @param string $dataVencimento
     * @param float $valor
     * @param ?string $observacoes
     * @param Id $formaPagamento
     */
    public function __construct(
        public int $id,
        public string $dataVencimento,
        public float $valor,
        public ?string $observacoes,
        public Id $formaPagamento,
    ) {
    }
}
