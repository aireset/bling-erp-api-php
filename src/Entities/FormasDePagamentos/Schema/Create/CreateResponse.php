<?php

namespace Aireset\BlingErpApi\Entities\FormasDePagamentos\Schema\Create;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseRootObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

/**
 * Resposta da criação de uma forma de pagamento.
 */
readonly final class CreateResponse extends BaseResponseRootObject
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
