<?php

namespace Aireset\BlingErpApi\Entities\Contatos\Schema\FindFinalCustomer;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseRootObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;

/**
 * Resposta da busca de um contato pelo ID.
 */
readonly final class FindFinalCustomerResponse extends BaseResponseRootObject
{
    /**
     * Constrói o objeto.
     *
     * @param FindFinalCustomerResponseData $data
     */
    public function __construct(
        public FindFinalCustomerResponseData $data
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
