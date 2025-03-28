<?php

namespace Aireset\BlingErpApi\Entities\PedidosVendas\Schema\PostStockToDeposit;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseRootObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;

/**
 * Resposta do lançamento do estoque de um pedido de venda pelo ID,
 * especificando o ID do depósito.
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
