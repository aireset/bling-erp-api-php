<?php

namespace Aireset\BlingErpApi\Entities\PropostasComerciais\Schema\DeleteMany;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Error\Error;

readonly final class DeleteManyResponseDataAlertas extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?Error $error
     */
    public function __construct(
        public ?Error $error,
    ) {}
}
