<?php

namespace Aireset\BlingErpApi\Entities\ProdutosEstruturas\Schema\DeleteComponents;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseRootObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;

/**
 * Resposta da remoção dos componentes de um produto com composição pelos IDs
 * dos componentes.
 */
readonly final class DeleteComponentsResponse extends BaseResponseRootObject
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
