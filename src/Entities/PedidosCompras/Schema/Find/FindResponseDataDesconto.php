<?php

namespace Aireset\BlingErpApi\Entities\PedidosCompras\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\PedidosCompras\Enum\DescontoUnidade;

readonly final class FindResponseDataDesconto extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param float $valor
     * @param ?DescontoUnidade $unidade
     */
    public function __construct(
        public float $valor,
        public ?DescontoUnidade $unidade,
    ) {
    }
}
