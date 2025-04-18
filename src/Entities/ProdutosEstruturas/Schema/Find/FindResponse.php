<?php

namespace Aireset\BlingErpApi\Entities\ProdutosEstruturas\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseRootObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;

/**
 * Resposta da estrutura de um produto com composição pelo ID.
 */
readonly final class FindResponse extends BaseResponseRootObject
{
    /**
     * Constrói o objeto.
     *
     * @param FindResponseData $data
     */
    public function __construct(
        public FindResponseData $data
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
