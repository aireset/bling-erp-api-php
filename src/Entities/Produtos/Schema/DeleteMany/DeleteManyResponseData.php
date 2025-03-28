<?php

namespace Aireset\BlingErpApi\Entities\Produtos\Schema\DeleteMany;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class DeleteManyResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?DeleteManyResponseDataAlertas[] $alertas
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
            'alertas' => DeleteManyResponseDataAlertas::class
        ];
    }
}
