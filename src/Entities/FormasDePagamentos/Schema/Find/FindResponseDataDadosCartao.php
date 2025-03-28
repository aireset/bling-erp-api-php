<?php

namespace Aireset\BlingErpApi\Entities\FormasDePagamentos\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\FormasDePagamentos\Enum\DadosCartaoTipo;
use Aireset\BlingErpApi\Entities\FormasDePagamentos\Enum\DadosCartaoBandeira;

readonly final class FindResponseDataDadosCartao extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param DadosCartaoBandeira $bandeira
     * @param DadosCartaoTipo $tipo
     * @param ?string $cnpjCredenciadora
     */
    public function __construct(
        public DadosCartaoBandeira $bandeira,
        public DadosCartaoTipo $tipo,
        public ?string $cnpjCredenciadora,
    ) {
    }
}
