<?php

namespace Aireset\BlingErpApi\Entities\Nfces\Schema\Create;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class CreateResponseDataContato extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?string $nome
     */
    public function __construct(
        public ?string $nome
    ) {
    }
}
