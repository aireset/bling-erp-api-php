<?php

namespace Aireset\BlingErpApi\Entities\Nfces\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Nfes\Enum\FretePorConta;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

readonly final class FindResponseDataTransporte extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?FretePorConta $fretePorConta
     * @param ?FindResponseDataTransporteTransportador $transportador
     * @param ?Id[] $volumes
     * @param ?FindResponseDataTransporteEtiqueta $etiqueta
     */
    public function __construct(
        public ?FretePorConta $fretePorConta,
        public ?FindResponseDataTransporteTransportador $transportador,
        public ?array $volumes,
        public ?FindResponseDataTransporteEtiqueta $etiqueta,
    ) {}

    /**
     * @inheritDoc
     */
    protected static function fromRules(): array
    {
        return [
            'volumes' => Id::class
        ];
    }
}
