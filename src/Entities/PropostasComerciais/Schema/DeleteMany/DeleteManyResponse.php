<?php

namespace Aireset\BlingErpApi\Entities\PropostasComerciais\Schema\DeleteMany;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseRootObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;

/**
 * Resposta da remoção de múltiplas propostas comerciais pelos IDs.
 */
readonly final class DeleteManyResponse extends BaseResponseRootObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?DeleteManyResponseData $data
     */
    public function __construct(
        public ?DeleteManyResponseData $data
    ) {}

    /**
     * @inheritDoc
     */
    public static function fromResponse(ResponseOptions $response): static
    {
        if (is_null($response->body?->content)) {
            return new self(null);
        }

        return self::from($response->body->content);
    }
}
