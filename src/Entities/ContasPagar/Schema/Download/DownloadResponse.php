<?php

namespace Aireset\BlingErpApi\Entities\ContasPagar\Schema\Download;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseRootObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

/**
 * Resposta do recebimento de uma conta a pagar.
 */
readonly final class DownloadResponse extends BaseResponseRootObject
{
    /**
     * Constrói o objeto.
     *
     * @param Id $bordero
     */
    public function __construct(
        public Id $bordero
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
