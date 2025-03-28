<?php

namespace Aireset\BlingErpApi\Entities\Nfes\Schema\Send;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class SendResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?string $xml
     */
    public function __construct(
        public ?string $xml
    ) {
    }
}
