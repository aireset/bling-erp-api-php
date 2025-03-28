<?php

namespace Aireset\BlingErpApi\Entities\Borderos\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

/**
 * @internal
 */
readonly final class FindResponseDataPagamentos extends BaseResponseObject
{
  /**
   * Constrói o objeto.
   *
   * @param Id $contato
   * @param string $numeroDocumento
   * @param float $valorPago
   * @param float $juros
   * @param float $desconto
   * @param float $acrescimo
   * @param float $tarifa
   */
  public function __construct(
    public Id $contato,
    public string $numeroDocumento,
    public float $valorPago,
    public float $juros,
    public float $desconto,
    public float $acrescimo,
    public float $tarifa,
  ) {
  }
}
