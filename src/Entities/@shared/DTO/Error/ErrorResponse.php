<?php

namespace Aireset\BlingErpApi\Entities\Shared\DTO\Error;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseRootObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;

/**
 * Objeto representativo da resposta da requisição com erro.
 */
readonly final class ErrorResponse extends BaseResponseRootObject
{
  /**
   * Constrói o objeto.
   *
   * @param Error $error
   */
  public function __construct(public Error $error)
  {
  }

  /**
   * @inheritDoc
   */
  public static function fromResponse(ResponseOptions $response): static
  {
    return self::from($response->body->content);
  }
}
