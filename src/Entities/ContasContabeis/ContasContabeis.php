<?php

namespace Aireset\BlingErpApi\Entities\ContasContabeis;

use Aireset\BlingErpApi\Entities\ContasContabeis\Schema\Get\GetParams;
use Aireset\BlingErpApi\Entities\ContasContabeis\Schema\Find\FindResponse;
use Aireset\BlingErpApi\Entities\ContasContabeis\Schema\Get\GetResponse;
use Aireset\BlingErpApi\Entities\Shared\BaseEntity;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Exceptions\BlingApiException;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;

/**
 * Entidade para interação com contas contábeis.
 *
 * @see https://developer.bling.com.br/referencia#/Contas%20Cont%C3%A1beis
 */
class ContasContabeis extends BaseEntity
{
    /**
     * Obtém contas contábeis.
     *
     * @param GetParams|array|null $params Parâmetros para a busca
     * 
     * @return GetResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Contas%20Cont%C3%A1beis/get_contas_contabeis
     */
    public function get(GetParams|array|null $params = null): GetResponse
    {
        $response = $this->repository->index(
            new RequestOptions(
                endpoint: "contas-contabeis",
                queryParams: $params
            )
        );

        return GetResponse::fromResponse($response);
    }

    /**
     * Obtém uma conta contábil.
     * 
     * @param int $idContaContabil ID da conta contábil
     * 
     * @return FindResponse
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Contas%20Cont%C3%A1beis/get_contas_contabeis__idContaContabil_
     */
    public function find(int $idContaContabil): FindResponse
    {
        $response = $this->repository->show(
            new RequestOptions(
                endpoint: "contas-contabeis/$idContaContabil",
            )
        );

        return FindResponse::fromResponse($response);
    }
}
