<?php

namespace Aireset\BlingErpApi\Entities\PedidosVendas\Schema\Update;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Error\ErrorField;

readonly final class UpdateResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     * @param ?ErrorField[] $alertas
     * @param ?UpdateResponseDataRastreamento $rastreamento
     */
    public function __construct(
        public int $id,
        public ?array $alertas,
        public ?array $rastreamento,
    ) {
    }

    /**
     * @inheritDoc
     */
    protected static function fromRules(): array
    {
        return [
            'alertas' => ErrorField::class,
        ];
    }
}
