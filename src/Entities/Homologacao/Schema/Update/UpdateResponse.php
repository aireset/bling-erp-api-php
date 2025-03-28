<?php

namespace Aireset\BlingErpApi\Entities\Homologacao\Schema\Update;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseRootObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

/**
 * Resposta da alteração do produto da homologação pelo ID.
 */
readonly final class UpdateResponse extends BaseResponseRootObject
{
    /**
     * Constrói o objeto.
     *
     * @param string $hash
     */
    public function __construct(
        public string $hash
    ) {
    }

    /**
     * @inheritDoc
     */
    public static function fromResponse(ResponseOptions $response): static
    {
        if (!is_null($response->body?->content)) {
            static::throwForInconsistentResponseOptions($response);
        }

        return new self(
            hash: $response->headers->content['x-bling-homologacao']
        );
    }
}
