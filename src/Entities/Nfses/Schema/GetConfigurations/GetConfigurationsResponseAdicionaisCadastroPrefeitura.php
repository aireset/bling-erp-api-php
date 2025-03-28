<?php

namespace Aireset\BlingErpApi\Entities\Nfses\Schema\GetConfigurations;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class GetConfigurationsResponseAdicionaisCadastroPrefeitura extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?string $login
     * @param ?string $senha
     */
    public function __construct(
        public ?string $login,
        public ?string $senha,
    ) {
    }
}
