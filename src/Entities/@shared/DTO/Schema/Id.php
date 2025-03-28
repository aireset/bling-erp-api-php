<?php

namespace Aireset\BlingErpApi\Entities\Shared\DTO\Schema;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

/**
 * Objeto com ID.
 */
final readonly class Id extends BaseResponseObject
{
  /**
   * Constrói o objeto.
   *
   * @param int $id
   */
  public function __construct(public int $id)
  {
  }
}
