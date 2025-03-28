<?php

namespace Aireset\BlingErpApi\Entities\Produtos\Schema\Update;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class UpdateResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     * @param ?UpdateResponseDataVariations $variations
     * @param ?string[] $warnings
     */
    public function __construct(
        public int $id,
        public ?UpdateResponseDataVariations $variations,
        public ?array $warnings,
    ) {
    }
}
