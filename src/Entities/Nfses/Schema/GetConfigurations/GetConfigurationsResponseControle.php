<?php

namespace Aireset\BlingErpApi\Entities\Nfses\Schema\GetConfigurations;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GetConfigurationsResponseControle extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?GetConfigurationsResponseControleNumeracaoRPS $numeracaoRPS
     */
    public function __construct(
        public ?GetConfigurationsResponseControleNumeracaoRPS $numeracaoRPS
    ) {
    }
}
