<?php

namespace Aireset\BlingErpApi\Entities\Contratos\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Contratos\Enum\NotaFiscalMes;
use Aireset\BlingErpApi\Entities\Contratos\Enum\NotaFiscalGerar;
use Aireset\BlingErpApi\Entities\Contratos\Enum\NotaFiscalDescontarImpostoRenda;

readonly final class FindResponseDataNotaFiscal extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?NotaFiscalMes $mes
     * @param ?NotaFiscalGerar $gerar
     * @param ?NotaFiscalDescontarImpostoRenda $descontarImpostoRenda
     * @param ?string $texto
     * @param ?string $cfop
     * @param ?FindResponseDataNotaFiscalIss $iss
     * @param ?FindResponseDataNotaFiscalItem $item
     */
    public function __construct(
        public ?NotaFiscalMes $mes,
        public ?NotaFiscalGerar $gerar,
        public ?NotaFiscalDescontarImpostoRenda $descontarImpostoRenda,
        public ?string $texto,
        public ?string $cfop,
        public ?FindResponseDataNotaFiscalIss $iss,
        public ?FindResponseDataNotaFiscalItem $item,
    ) {
    }
}
