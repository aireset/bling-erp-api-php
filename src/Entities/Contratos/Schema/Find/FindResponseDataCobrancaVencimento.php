<?php

namespace Aireset\BlingErpApi\Entities\Contratos\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Contratos\Enum\CobrancaVencimentoTipo;
use Aireset\BlingErpApi\Entities\Contratos\Enum\CobrancaVencimentoPeriodicidade;

readonly final class FindResponseDataCobrancaVencimento extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?CobrancaVencimentoTipo $tipo
     * @param ?int $dia
     * @param ?CobrancaVencimentoPeriodicidade $periodicidade
     */
    public function __construct(
        public ?CobrancaVencimentoTipo $tipo,
        public ?int $dia,
        public ?CobrancaVencimentoPeriodicidade $periodicidade,
    ) {
    }
}
