<?php

namespace Aireset\BlingErpApi\Entities\PedidosVendas\Schema\PostStock;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseRootObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;

/**
 * Resposta do lançamento do estoque de um pedido de venda pelo ID, no depósito
 * padrão.
 */
readonly final class PostStockResponse extends BaseResponseRootObject
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
