<?php

namespace Aireset\BlingErpApi\Contracts;

use Aireset\BlingErpApi\Entities\Shared\DTO\Request\ResponseOptions;

/**
 * Interface para o objeto raiz de resposta.
 */
interface IResponseRootObject extends IResponseObject
{
  /**
   * Constrói a partir de uma resposta de requisição.
   */
  public static function fromResponse(ResponseOptions $response): static|null;
}
