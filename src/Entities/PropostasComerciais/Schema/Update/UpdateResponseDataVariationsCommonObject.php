<?php

namespace Aireset\BlingErpApi\Entities\PropostasComerciais\Schema\Update;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class UpdateResponseDataVariationsCommonObject extends BaseResponseObject
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
    ) {}
}
