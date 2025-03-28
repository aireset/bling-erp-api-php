<?php

namespace Aireset\BlingErpApi\Entities\Nfses\Schema\GetConfigurations;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GetConfigurationsResponseImpostos extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?bool $bloquearRetencaoPessoaFisica
     * @param ?GetConfigurationsResponseImpostosIR $IR
     * @param ?GetConfigurationsResponseImpostosOutros $outros
     */
    public function __construct(
        public ?bool $bloquearRetencaoPessoaFisica,
        public ?GetConfigurationsResponseImpostosIR $IR,
        public ?GetConfigurationsResponseImpostosOutros $outros,
    ) {
    }
}
