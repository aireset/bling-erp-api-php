<?php

namespace Aireset\BlingErpApi\Entities\Nfses\Schema\UpdateConfigurations;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseRootObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;

/**
 * Resposta da criação e alteração das configurações para emissão de notas de
 * serviço.
 */
readonly final class UpdateConfigurationsResponse extends BaseResponseRootObject
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
