<?php

namespace Aireset\BlingErpApi\Entities\ContasPagar\Schema\Shared;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Exceptions\BlingParseResponsePayloadException;

readonly class ContasPagarOcorrenciaDTO extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     * 
     * @param int $tipo
     * @param ?bool $considerarDiasUteis
     * @param int $diaVencimento
     * @param ?string $dataLimite
     */
    public function __construct(
        public int $tipo,
        public ?bool $considerarDiasUteis,
        public int $diaVencimento,
        public ?string $dataLimite
    ) {}

    /**
     * @inheritDoc
     */
    public static function from(array $attributes): static
    {
        $allowedTypes = [3, 4, 5, 6, 7, 8];
        if (!array_key_exists('tipo', $attributes) || !in_array($attributes['tipo'], $allowedTypes)) {
            throw new BlingParseResponsePayloadException($attributes);
        }

        return parent::from($attributes);
    }
}
