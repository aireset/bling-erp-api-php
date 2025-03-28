<?php

namespace Aireset\BlingErpApi\Entities\Shared\DTO\Request;

use Aireset\BlingErpApi\Entities\Shared\DTO\Error\ErrorResponse;
use Aireset\BlingErpApi\Exceptions\BlingApiException;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;

/**
 * Dados da resposta de uma requisição.
 */
class ResponseOptions
{
  /**
   * Constrói o objeto.
   *
   * @param ?Body $body
   * @param ?Headers $headers
   *
   * @return self
   */
  public function __construct(
    public readonly string $endpoint,
    public readonly string $method,
    public readonly int $status,
    public readonly ?Headers $headers = null,
    public readonly ?Body $body = null,
  ) {
    $isErrorStatusCode = $status >= 400;
    $isErrorBody = !is_null($body)
      && is_array($body->content)
      && array_key_exists('error', $body->content);

    if ($isErrorStatusCode || $isErrorBody) {
      try {
        $errorResponse = ErrorResponse::fromResponse($this);

        throw new BlingApiException(
          rawResponse: $errorResponse,
          status: $status
        );
      } catch (\TypeError $e) {
        throw new BlingInternalException(
          message: "Não foi possível realizar a chamada HTTP: $method $endpoint",
          responseHeaders: $headers,
          responseBody: $body,
          code: $status,
          previous: $e
        );
      }
    }
  }
}
