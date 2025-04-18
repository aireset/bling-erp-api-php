<?php

namespace Aireset\BlingErpApi\Repositories;

use Aireset\BlingErpApi\Entities\Shared\DTO\Request\Body;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\Headers;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;
use GuzzleHttp\Client;

/**
 * Repositório de chamada de API do Bling utilizando `GuzzleHttp`.
 */
class BlingRepository implements IBlingRepository
{
  /** @property Client $client Cliente de chamada HTTP. */
  private readonly Client $client;

  /** @property array $baseHeaders _Headers_ base para a requisição. */
  private readonly array $baseHeaders;

  /**
   * Cria o objeto.
   *
   * @param string $baseUrl
   * @param string $accessToken
   */
  public function __construct(string $baseUrl, string $accessToken)
  {
    $this->baseHeaders = ['Authorization' => "Bearer $accessToken"];
    $this->client = new Client(['base_uri' => $baseUrl]);
  }

  /**
   * @inheritDoc
   */
  public function index(RequestOptions $options): ResponseOptions
  {
    $response = $this->client->get($options->endpoint, [
      'query'   => $options->queryParams?->content,
      'headers' => [
        ...$this->baseHeaders,
        ...($options->headers?->content ?? [])
      ],
    ]);

    return new ResponseOptions(
      endpoint: $options->endpoint,
      method: 'GET',
      status: $response->getStatusCode(),
      headers: new Headers($response->getHeaders()),
      body: $this->buildResponseBody($response->getBody()->getContents()),
    );
  }

  /**
   * @inheritDoc
   */
  public function show(RequestOptions $options): ResponseOptions
  {
    return $this->index($options);
  }

  /**
   * @inheritDoc
   */
  public function store(RequestOptions $options): ResponseOptions
  {
    $response = $this->client->post($options->endpoint, [
      'query'   => $options->queryParams?->content,
      'json'    => $options->body?->content,
      'headers' => [
        ...$this->baseHeaders,
        ...($options->headers?->content ?? [])
      ],
    ]);

    return new ResponseOptions(
      endpoint: $options->endpoint,
      method: 'POST',
      status: $response->getStatusCode(),
      headers: new Headers($response->getHeaders()),
      body: $this->buildResponseBody($response->getBody()->getContents()),
    );
  }

  /**
   * @inheritDoc
   */
  public function update(RequestOptions $options): ResponseOptions
  {
    $response = $this->client->patch($options->endpoint, [
      'query'   => $options->queryParams?->content,
      'json'    => $options->body?->content,
      'headers' => [
        ...$this->baseHeaders,
        ...($options->headers?->content ?? [])
      ],
    ]);

    return new ResponseOptions(
      endpoint: $options->endpoint,
      method: 'PATCH',
      status: $response->getStatusCode(),
      headers: new Headers($response->getHeaders()),
      body: $this->buildResponseBody($response->getBody()->getContents()),
    );
  }

  /**
   * @inheritDoc
   */
  public function replace(RequestOptions $options): ResponseOptions
  {
    $response = $this->client->put($options->endpoint, [
      'query'   => $options->queryParams?->content,
      'json'    => $options->body?->content,
      'headers' => [
        ...$this->baseHeaders,
        ...($options->headers?->content ?? [])
      ],
    ]);

    return new ResponseOptions(
      endpoint: $options->endpoint,
      method: 'PUT',
      status: $response->getStatusCode(),
      headers: new Headers($response->getHeaders()),
      body: $this->buildResponseBody($response->getBody()->getContents()),
    );
  }

  /**
   * @inheritDoc
   */
  public function destroy(RequestOptions $options): ResponseOptions
  {
    $response = $this->client->delete($options->endpoint, [
      'query'   => $options->queryParams?->content,
      'json'    => $options->body?->content,
      'headers' => [
        ...$this->baseHeaders,
        ...($options->headers?->content ?? [])
      ],
    ]);

    return new ResponseOptions(
      endpoint: $options->endpoint,
      method: 'DELETE',
      status: $response->getStatusCode(),
      headers: new Headers($response->getHeaders()),
      body: $this->buildResponseBody($response->getBody()->getContents()),
    );
  }

  /**
   * Monta o corpo da resposta.
   *
   * @param mixed $contents
   *
   * @return ?Body
   */
  private function buildResponseBody(mixed $contents): ?Body
  {
    $body = null;

    if (!is_null($contents)) {
      $arrResponseBody = json_decode($contents, true);
      $body = is_array($arrResponseBody) ? new Body(json_decode($contents, true)) : null;
    }

    return $body;
  }
}
