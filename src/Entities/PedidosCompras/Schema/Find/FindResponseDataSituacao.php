<?php

namespace Aireset\BlingErpApi\Entities\PedidosCompras\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\PedidosCompras\Enum\Situacao;

readonly final class FindResponseDataSituacao extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param Situacao $valor
     */
    public function __construct(
        public Situacao $valor
    ) {
    }
}
