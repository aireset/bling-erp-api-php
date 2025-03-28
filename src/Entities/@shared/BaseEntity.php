<?php

namespace Aireset\BlingErpApi\Entities\Shared;

use Aireset\BlingErpApi\Repositories\IBlingRepository;

/**
 * Entidade base para o projeto.
 */
abstract class BaseEntity
{
  /**
   * Constrói o objeto.
   *
   * @param IBlingRepository $repository Repositório para conexão com o Bling.
   */
  public function __construct(protected IBlingRepository $repository)
  {
  }
}
