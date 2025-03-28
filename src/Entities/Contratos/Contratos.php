<?php

namespace Aireset\BlingErpApi\Entities\Contratos;

use Aireset\BlingErpApi\Entities\Contratos\Schema\Get\GetParams;
use Aireset\BlingErpApi\Entities\Contratos\Schema\Create\CreateResponse;
use Aireset\BlingErpApi\Entities\Contratos\Schema\Delete\DeleteResponse;
use Aireset\BlingErpApi\Entities\Contratos\Schema\Find\FindResponse;
use Aireset\BlingErpApi\Entities\Contratos\Schema\Get\GetResponse;
use Aireset\BlingErpApi\Entities\Contratos\Schema\Update\UpdateResponse;
use Aireset\BlingErpApi\Entities\Shared\BaseEntity;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Exceptions\BlingApiException;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;

/**
 * Entidade para interação com contratos.
 *
 * @see https://developer.bling.com.br/referencia#/Contratos
 */
class Contratos extends BaseEntity
{
    /**
     * Remove um contrato.
     *
     * @param int $idContrato ID do contrato
     *
     * @return null
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Contratos/delete_contratos__idContrato_
     */
    public function delete(int $idContrato): null
    {
        $response = $this->repository->destroy(
            new RequestOptions(
                endpoint: "contratos/$idContrato"
            )
        );

        return DeleteResponse::fromResponse($response);
    }

    /**
     * Obtém contratos.
     *
     * @param GetParams|array|null $params Parâmetros para a busca
     * 
     * @return GetResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Contratos/get_contratos
     */
    public function get(GetParams|array|null $params = null): GetResponse
    {
        $response = $this->repository->index(
            new RequestOptions(
                endpoint: "contratos",
                queryParams: $params
            )
        );

        return GetResponse::fromResponse($response);
    }

    /**
     * Obtém um contrato.
     * 
     * @param int $idContrato ID do contrato
     * 
     * @return FindResponse
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Contratos/get_contratos__idContrato_
     */
    public function find(int $idContrato): FindResponse
    {
        $response = $this->repository->show(
            new RequestOptions(
                endpoint: "contratos/$idContrato",
            )
        );

        return FindResponse::fromResponse($response);
    }

    /**
     * Cria um contrato.
     * 
     * @param array $body Corpo da requisição
     * 
     * @return CreateResponse
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Contratos/post_contratos
     */
    public function create(array $body): CreateResponse
    {
        $response = $this->repository->store(
            new RequestOptions(
                endpoint: "contratos",
                body: $body
            )
        );

        return CreateResponse::fromResponse($response);
    }

    /**
     * Altera um contrato.
     * 
     * @param int $idContrato ID do contrato
     * @param array $body Corpo da requisição
     * 
     * @return UpdateResponse
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Contratos/put_contratos__idContrato_
     */
    public function update(int $idContrato, array $body): UpdateResponse
    {
        $response = $this->repository->replace(
            new RequestOptions(
                endpoint: "contratos/$idContrato",
                body: $body
            )
        );

        return UpdateResponse::fromResponse($response);
    }
}
