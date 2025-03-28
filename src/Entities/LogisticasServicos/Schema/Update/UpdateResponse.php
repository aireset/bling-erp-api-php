<?php

namespace Aireset\BlingErpApi\Entities\LogisticasServicos\Schema\Update;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseRootObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

/**
 * Resposta da alteração dos dados de um serviço de logística personalizada pelo
 * ID.
 */
readonly final class UpdateResponse extends BaseResponseRootObject
{
    /**
     * Constrói o objeto.
     *
     * @param Id $data
     */
    public function __construct(
        public Id $data
    ) {
    }

    /**
     * @inheritDoc
     */
    public static function fromResponse(ResponseOptions $response): static
    {
        if (is_null($response->body?->content)) {
            static::throwForInconsistentResponseOptions($response);
        }

        return self::from($response->body->content);
    }
}
