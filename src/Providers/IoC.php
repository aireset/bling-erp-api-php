<?php

namespace Aireset\BlingErpApi\Providers;

use Aireset\BlingErpApi\Repositories\BlingRepository;
use Aireset\BlingErpApi\Repositories\IBlingRepository;

/**
 * Configura a injeção de dependência.
 */
class IoC
{
  /**
   * Obtém a instância do repositório de conexão ao Bling.
   *
   * @param string $accessToken
   *
   * @return IBlingRepository
   */
  public static function getRepository(string $accessToken): IBlingRepository
  {
    return new BlingRepository(
      baseUrl: 'https://www.bling.com.br/Api/v3/',
      accessToken: $accessToken
    );
  }
}
