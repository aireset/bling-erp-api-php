<?php

namespace Aireset\BlingErpApi\Entities\Nfses\Schema\GetConfigurations;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GetConfigurationsResponseBasicas extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $emissorPadrao
     * @param ?int $naturezaOperacao
     */
    public function __construct(
        public ?int $emissorPadrao,
        public ?int $naturezaOperacao,
    ) {
    }
}
