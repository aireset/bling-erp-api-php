<?php

namespace Aireset\BlingErpApi\Entities\Nfses\Schema\GetConfigurations;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GetConfigurationsResponseEnvioEmailPadrao extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?string $copia
     * @param ?string $resposta
     */
    public function __construct(
        public ?string $copia,
        public ?string $resposta,
    ) {
    }
}
