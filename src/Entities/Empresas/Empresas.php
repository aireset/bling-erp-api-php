<?php

namespace Aireset\BlingErpApi\Entities\Empresas;

use Aireset\BlingErpApi\Entities\Empresas\Schema\Get\GetResponse;
use Aireset\BlingErpApi\Entities\Shared\BaseEntity;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Exceptions\BlingApiException;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;

/**
 * Entidade para interação com empresas.
 *
 * @see https://developer.bling.com.br/referencia#/Empresas
 */
class Empresas extends BaseEntity
{
    /**
     * Obtém dados básicos da empresa.
     * 
     * @return GetResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Empresas/get_empresas_me_dados_basicos
     */
    public function get(): GetResponse
    {
        $response = $this->repository->index(
            new RequestOptions(
                endpoint: "empresas/me/dados-basicos",
            )
        );

        return GetResponse::fromResponse($response);
    }
}
