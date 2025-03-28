<?php

namespace Aireset\BlingErpApi\Entities\Nfes\Schema\DeleteMany;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class DeleteManyResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?string[] $alertas
     * @param int[] $idsExcluidos
     */
    public function __construct(
        public array $alertas,
        public array $idsExcluidos,
    ) {
    }
}
