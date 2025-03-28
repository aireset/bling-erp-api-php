<?php

namespace Aireset\BlingErpApi\Entities\PedidosCompras\Schema\Get;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

readonly final class GetResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $id
     * @param ?int $numero
     * @param ?string $data
     * @param ?string $dataPrevista
     * @param ?float $totalProdutos
     * @param ?float $total
     * @param ?Id $fornecedor
     * @param ?GetResponseDataSituacao $situacao
     */
    public function __construct(
        public ?int $id,
        public ?int $numero,
        public ?string $data,
        public ?string $dataPrevista,
        public ?float $totalProdutos,
        public ?float $total,
        public ?Id $fornecedor,
        public ?GetResponseDataSituacao $situacao,
    ) {
    }
}
