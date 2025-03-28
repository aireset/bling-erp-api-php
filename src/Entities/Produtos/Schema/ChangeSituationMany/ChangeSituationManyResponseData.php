<?php

namespace Aireset\BlingErpApi\Entities\Produtos\Schema\ChangeSituationMany;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class ChangeSituationManyResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?ChangeSituationManyResponseDataAlertas[] $alertas
     */
    public function __construct(
        public ?array $alertas
    ) {
    }

    /**
     * @inheritDoc
     */
    protected static function fromRules(): array
    {
        return [
            'alertas' => ChangeSituationManyResponseDataAlertas::class
        ];
    }
}
