<?php

namespace Aireset\BlingErpApi\Entities\Nfses\Schema\GetConfigurations;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GetConfigurationsResponseImpostosOutrosINSS extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?bool $reter
     */
    public function __construct(
        public ?bool $reter,
    ) {
    }
}
