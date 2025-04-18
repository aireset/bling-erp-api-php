<?php

namespace Aireset\BlingErpApi\Entities\NaturezasDeOperacoes;

use Aireset\BlingErpApi\Entities\NaturezasDeOperacoes\Schema\Get\GetParams;
use Aireset\BlingErpApi\Entities\NaturezasDeOperacoes\Schema\Get\GetResponse;
use Aireset\BlingErpApi\Entities\NaturezasDeOperacoes\Schema\ObtainTax\ObtainTaxResponse;
use Aireset\BlingErpApi\Entities\Shared\BaseEntity;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Exceptions\BlingApiException;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;

/**
 * Entidade para interação com naturezas de operações.
 *
 * @see https://developer.bling.com.br/referencia#/Naturezas%20de%20Opera%C3%A7%C3%B5es
 */
class NaturezasDeOperacoes extends BaseEntity
{
    /**
     * Obtém naturezas de operações.
     *
     * @param GetParams|array|null $params Parâmetros para a busca
     *
     * @return GetResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Naturezas%20de%20Opera%C3%A7%C3%B5es/get_naturezas_operacoes
     */
    public function get(GetParams|array|null $params = null): GetResponse
    {
        $response = $this->repository->index(
            new RequestOptions(
                endpoint: "naturezas-operacoes",
                queryParams: $params
            )
        );

        return GetResponse::fromResponse($response);
    }

    /**
     * Obtém regras de tributação que incidem sobre o item, dada uma natureza de operação..
     *
     * @param int $idNaturezaOperacao ID da natureza de operação
     * @param array $body Corpo da requisição
     *
     * @return ObtainTaxResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Naturezas%20de%20Opera%C3%A7%C3%B5es/post_naturezas_operacoes__idNaturezaOperacao__obter_tributacao
     */
    public function obtainTax(int $idNaturezaOperacao, array $body): ObtainTaxResponse
    {
        $response = $this->repository->store(
            new RequestOptions(
                endpoint: "naturezas-operacoes/$idNaturezaOperacao/obter-tributacao",
                body: $body
            )
        );

        return ObtainTaxResponse::fromResponse($response);
    }
}
