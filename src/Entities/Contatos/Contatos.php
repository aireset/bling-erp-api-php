<?php

namespace Aireset\BlingErpApi\Entities\Contatos;

use Aireset\BlingErpApi\Entities\Contatos\Schema\ChangeSituation\ChangeSituationResponse;
use Aireset\BlingErpApi\Entities\Contatos\Schema\ChangeSituationMany\ChangeSituationManyResponse;
use Aireset\BlingErpApi\Entities\Contatos\Schema\Get\GetParams;
use Aireset\BlingErpApi\Entities\Contatos\Schema\Create\CreateResponse;
use Aireset\BlingErpApi\Entities\Contatos\Schema\DeleteMany\DeleteManyResponse;
use Aireset\BlingErpApi\Entities\Contatos\Schema\Delete\DeleteResponse;
use Aireset\BlingErpApi\Entities\Contatos\Schema\Find\FindResponse;
use Aireset\BlingErpApi\Entities\Contatos\Schema\FindTypes\FindTypesResponse;
use Aireset\BlingErpApi\Entities\Contatos\Schema\DeleteMany\DeleteManyParams;
use Aireset\BlingErpApi\Entities\Contatos\Schema\FindFinalCustomer\FindFinalCustomerResponse;
use Aireset\BlingErpApi\Entities\Contatos\Schema\Get\GetResponse;
use Aireset\BlingErpApi\Entities\Contatos\Schema\Update\UpdateResponse;
use Aireset\BlingErpApi\Entities\Shared\BaseEntity;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Exceptions\BlingApiException;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;

/**
 * Entidade para interação com contatos.
 *
 * @see https://developer.bling.com.br/referencia#/Contatos
 */
class Contatos extends BaseEntity
{
    /**
     * Remove múltiplos contatos.
     *
     * @param ?DeleteManyParams $params IDs dos contatos
     *
     * @return null
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Contatos/delete_contatos
     */
    public function deleteMany(DeleteManyParams $params = null): null
    {
        $response = $this->repository->destroy(
            new RequestOptions(
                endpoint: "contatos",
                queryParams: $params
            )
        );

        return DeleteManyResponse::fromResponse($response);
    }

    /**
     * Remove um contato.
     *
     * @param int $idContato ID do contato
     *
     * @return null
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Contatos/delete_contatos__idContato_
     */
    public function delete(int $idContato): null
    {
        $response = $this->repository->destroy(
            new RequestOptions(
                endpoint: "contatos/$idContato"
            )
        );

        return DeleteResponse::fromResponse($response);
    }

    /**
     * Obtém contatos.
     *
     * @param GetParams|array|null $params Parâmetros para a busca
     * 
     * @return GetResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Contatos/get_contatos
     */
    public function get(GetParams|array|null $params = null): GetResponse
    {
        $response = $this->repository->index(
            new RequestOptions(
                endpoint: "contatos",
                queryParams: $params
            )
        );

        return GetResponse::fromResponse($response);
    }

    /**
     * Obtém um contato.
     * 
     * @param int $idContato ID do contato
     * 
     * @return FindResponse
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Contatos/get_contatos__idContato_
     */
    public function find(int $idContato): FindResponse
    {
        $response = $this->repository->show(
            new RequestOptions(
                endpoint: "contatos/$idContato",
            )
        );

        return FindResponse::fromResponse($response);
    }

    /**
     * Obtém os tipos de contato de um contato.
     * 
     * @param int $idContato ID do contato
     * 
     * @return FindTypesResponse
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Contatos/get_contatos__idContato__tipos
     */
    public function findTypes(int $idContato): FindTypesResponse
    {
        $response = $this->repository->show(
            new RequestOptions(
                endpoint: "contatos/$idContato/tipos",
            )
        );

        return FindTypesResponse::fromResponse($response);
    }

    /**
     * Obtém os dados do contato Consumidor Final.
     * 
     * @return FindFinalCustomerResponse
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Contatos/get_contatos_consumidor_final
     */
    public function findFinalCustomer(): FindFinalCustomerResponse
    {
        $response = $this->repository->show(
            new RequestOptions(
                endpoint: "contatos/consumidor-final",
            )
        );

        return FindFinalCustomerResponse::fromResponse($response);
    }

    /**
     * Altera a situação de um contato.
     * 
     * @param int $idContato ID do contato
     * @param array $body Corpo da requisição
     * 
     * @return null
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Contatos/patch_contatos__idContato__situacoes
     */
    public function changeSituation(int $idContato, array $body): null
    {
        $response = $this->repository->update(
            new RequestOptions(
                endpoint: "contatos/$idContato/situacoes",
                body: $body
            )
        );

        return ChangeSituationResponse::fromResponse($response);
    }

    /**
     * Cria um contato.
     * 
     * @param array $body Corpo da requisição
     * 
     * @return CreateResponse
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Contatos/post_contatos
     */
    public function create(array $body): CreateResponse
    {
        $response = $this->repository->store(
            new RequestOptions(
                endpoint: "contatos",
                body: $body
            )
        );

        return CreateResponse::fromResponse($response);
    }

    /**
     * Altera a situação de múltiplos contatos.
     * 
     * @param array $body Corpo da requisição
     * 
     * @return null
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Contatos/post_contatos_situacoes
     */
    public function changeSituationMany(array $body): null
    {
        $response = $this->repository->store(
            new RequestOptions(
                endpoint: "contatos/situacoes",
                body: $body
            )
        );

        return ChangeSituationManyResponse::fromResponse($response);
    }

    /**
     * Altera um contato.
     * 
     * @param int $idContato ID do contato
     * @param array $body Corpo da requisição
     * 
     * @return null
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Contatos/put_contatos__idContato_
     */
    public function update(int $idContato, array $body): null
    {
        $response = $this->repository->replace(
            new RequestOptions(
                endpoint: "contatos/$idContato",
                body: $body
            )
        );

        return UpdateResponse::fromResponse($response);
    }
}
