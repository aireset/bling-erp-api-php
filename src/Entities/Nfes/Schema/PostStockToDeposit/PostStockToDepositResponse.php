<?php

namespace Aireset\BlingErpApi\Entities\Nfes\Schema\PostStockToDeposit;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseRootObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;

/**
 * Resposta do lançamento do estoque de uma nota fiscal pelo ID, especificando o
 * ID do depósito.
 */
readonly final class PostStockToDepositResponse extends BaseResponseRootObject
{
    /**
     * @inheritDoc
     */
    public static function fromResponse(ResponseOptions $response): null
    {
        if (!is_null($response->body?->content)) {
            static::throwForInconsistentResponseOptions($response);
        }

        return null;
    }
}
