<?php

namespace Aireset\BlingErpApi\Entities\Usuarios\Schema\RecoverPassword;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class RecoverPasswordResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param string $message
     */
    public function __construct(
        public string $message
    ) {
    }
}
