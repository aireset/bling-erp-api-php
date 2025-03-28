<?php

namespace Aireset\BlingErpApi\Entities\Produtos\Schema\Create;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class CreateResponseDataVariationsCommonObject extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $id
     * @param ?array $variations
     * @param ?string[] $warnings
     */
    public function __construct(
        public ?int $id,
        public ?array $variations,
        public ?array $warnings,
    ) {
    }
}
