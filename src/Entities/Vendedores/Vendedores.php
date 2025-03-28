<?php

namespace Aireset\BlingErpApi\Entities\Vendedores;

use Aireset\BlingErpApi\Entities\Vendedores\Schema\Get\GetParams;
use Aireset\BlingErpApi\Entities\Vendedores\Schema\Find\FindResponse;
use Aireset\BlingErpApi\Entities\Vendedores\Schema\Get\GetResponse;
use Aireset\BlingErpApi\Entities\Shared\BaseEntity;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Exceptions\BlingApiException;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;

/**
 * Entidade para interação com Vendedores.
 *
 * @see https://developer.bling.com.br/referencia#/Vendedores
 */
class Vendedores extends BaseEntity
{
    /**
     * Obtém vendedores.
     *
     * @param GetParams|array|null $params Parâmetros para a busca
     *
     * @return GetResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Vendedores/get_vendedores
     */
    public function get(GetParams|array|null $params = null): GetResponse
    {
        $response = $this->repository->index(
            new RequestOptions(
                endpoint: "vendedores",
                queryParams: $params
            )
        );

        return GetResponse::fromResponse($response);
    }

    /**
     * Obtém um vendedor.
     *
     * @param int $idVendedor ID do vendedor
     *
     * @return FindResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Vendedores/get_vendedores__idVendedor_
     */
    public function find(int $idVendedor): FindResponse
    {
        $response = $this->repository->show(
            new RequestOptions(
                endpoint: "vendedores/$idVendedor",
            )
        );

        return FindResponse::fromResponse($response);
    }
}
