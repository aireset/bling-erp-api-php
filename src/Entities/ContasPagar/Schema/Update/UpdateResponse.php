<?php

namespace Aireset\BlingErpApi\Entities\ContasPagar\Schema\Update;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseRootObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;

/**
 * Resposta da alteração do vínculo de uma categoria da loja com a de produto
 * pelo ID.
 */
readonly final class UpdateResponse extends BaseResponseRootObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     */
    public function __construct(
        public int $id
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

        return UpdateResponse::from($response->body->content);
    }
}
