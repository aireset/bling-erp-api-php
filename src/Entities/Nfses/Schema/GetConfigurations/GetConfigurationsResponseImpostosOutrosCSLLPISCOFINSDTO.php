<?php

namespace Aireset\BlingErpApi\Entities\Nfses\Schema\GetConfigurations;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GetConfigurationsResponseImpostosOutrosCSLLPISCOFINSDTO extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?bool $calcular
     * @param ?bool $reter
     */
    public function __construct(
        public ?bool $calcular,
        public ?bool $reter,
    ) {
    }
}
