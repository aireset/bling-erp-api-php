<?php

namespace Aireset\BlingErpApi\Entities\Produtos\Schema\Create;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class CreateResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     * @param ?CreateResponseDataVariations $variations
     * @param ?string[] $warnings
     */
    public function __construct(
        public int $id,
        public ?CreateResponseDataVariations $variations,
        public ?array $warnings,
    ) {
    }
}
