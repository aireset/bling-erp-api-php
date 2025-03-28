<?php

namespace Aireset\BlingErpApi\Entities\Usuarios\Schema\ValidateHash;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class ValidateHashResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param bool $valido
     */
    public function __construct(
        public bool $valido
    ) {
    }
}
