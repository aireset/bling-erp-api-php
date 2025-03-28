<?php

namespace Aireset\BlingErpApi\Entities\Shared;

use Aireset\BlingErpApi\Contracts\IResponseRootObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;

/**
 * Classe base para objetos raiz de retorno.
 */
readonly abstract class BaseResponseRootObject extends BaseResponseObject
{
    /** 
     * @inheritDoc
     */
    public abstract static function fromResponse(ResponseOptions $response): static|null;

    /**
     * Lança `BlingInternalException` caso a resposta da API esteja
     * inconsistente.
     *
     * @param ResponseOptions $response
     *
     * @return never
     */
    protected static function throwForInconsistentResponseOptions(ResponseOptions $response): never
    {
        throw new BlingInternalException(
            message: "Resposta inconsistente da API: $response->method $response->endpoint",
            responseHeaders: $response->headers,
            responseBody: $response->body,
            code: $response->status,
        );
    }
}