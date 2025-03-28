<?php

namespace Aireset\BlingErpApi\Entities\Nfses\Schema\GetConfigurations;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GetConfigurationsResponseImpostosIRTexto extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?string $padrao
     * @param ?string $isento
     */
    public function __construct(
        public ?string $padrao,
        public ?string $isento,
    ) {
    }
}
