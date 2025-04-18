<?php

namespace Aireset\BlingErpApi\Entities\ContasReceber\Schema\Shared;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Exceptions\BlingParseResponsePayloadException;

readonly class ContasReceberOcorrenciaUnicaDTO extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     * 
     * @param int $tipo
     */
    public function __construct(
        public int $tipo
    ) {
    }

    /**
     * @inheritDoc
     */
    public static function from(array $attributes): static
    {
        if (!array_key_exists('tipo', $attributes) || $attributes['tipo'] !== 1) {
            throw new BlingParseResponsePayloadException($attributes);
        }

        return parent::from($attributes);
    }
}