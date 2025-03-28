<?php

namespace Aireset\BlingErpApi\Entities\Shared;

use Aireset\BlingErpApi\Entities\Shared\DTO\Request\Body;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\Headers;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;

/**
 * _Trait_ para geração de resposta de requisição em testes.
 */
trait TestResponseTrait
{
  /**
   * Gera uma resposta.
   *
   * @param ?string $endpoint
   * @param ?string $method
   * @param ?int $status
   * @param ?Headers $headers
   *
   * @return ResponseOptions
   */
  private function buildResponse(
    ?string $endpoint = null,
    ?string $method = null,
    ?int $status = null,
    ?Headers $headers = null,
    ?Body $body = null
  ): ResponseOptions {
    return new ResponseOptions(
      endpoint: $endpoint ?? fake()->word(),
      method: $method ?? fake()->word(),
      status: $status ?? fake()->numberBetween(200, 500),
      headers: $headers,
      body: $body,
    );
  }

  /**
   * Gera um corpo de requisição.
   *
   * @param ?array $content
   *
   * @return Body
   */
  private function buildBody(?array $content): ?Body
  {
    return is_null($content) ? $content : new Body($content);
  }

  /**
   * Gera _headers_ da requisição.
   *
   * @param ?array $content
   *
   * @return Headers
   */
  private function buildHeaders(?array $content): ?Headers
  {
    return is_null($content) ? $content : new Headers($content);
  }
}
