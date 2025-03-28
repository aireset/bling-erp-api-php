<?php

namespace Aireset\BlingErpApi\Entities\CamposCustomizados\Schema\Create;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class CreateResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     * @param ?int[] $idsVinculosAgrupadores
     * @param ?int[] $idsOpcoes
     */
    public function __construct(
        public int $id,
        public ?array $idsVinculosAgrupadores,
        public ?array $idsOpcoes
    ) {
    }
}
