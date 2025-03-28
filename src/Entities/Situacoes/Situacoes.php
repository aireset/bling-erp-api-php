<?php

namespace Aireset\BlingErpApi\Entities\Situacoes;

use Aireset\BlingErpApi\Entities\Situacoes\Schema\Delete\DeleteResponse;
use Aireset\BlingErpApi\Entities\Situacoes\Schema\Create\CreateResponse;
use Aireset\BlingErpApi\Entities\Situacoes\Schema\Find\FindResponse;
use Aireset\BlingErpApi\Entities\Situacoes\Schema\Update\UpdateResponse;
use Aireset\BlingErpApi\Entities\Shared\BaseEntity;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Exceptions\BlingApiException;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;

/**
 * Entidade para interação com Situações.
 *
 * @see https://developer.bling.com.br/referencia#/Situa%C3%A7%C3%B5es
 */
class Situacoes extends BaseEntity
{
    /**
     * Remove uma situação.
     *
     * @param int $idSituacao ID da situação
     *
     * @return null
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Situa%C3%A7%C3%B5es/delete_situacoes__idSituacao_
     */
    public function delete(int $idSituacao): null
    {
        $response = $this->repository->destroy(
            new RequestOptions(
                endpoint: "situacoes/$idSituacao",
            )
        );

        return DeleteResponse::fromResponse($response);
    }

    /**
     * Obtém uma situação.
     *
     * @param int $idSituacao ID da situação
     *
     * @return FindResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Situa%C3%A7%C3%B5es/get_situacoes__idSituacao_
     */
    public function find(int $idSituacao): FindResponse
    {
        $response = $this->repository->show(
            new RequestOptions(
                endpoint: "situacoes/$idSituacao",
            )
        );

        return FindResponse::fromResponse($response);
    }

    /**
     * Cria uma situação.
     *
     * @param array $body Corpo da requisição
     *
     * @return CreateResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Situa%C3%A7%C3%B5es/post_situacoes
     */
    public function create(array $body): CreateResponse
    {
        $response = $this->repository->store(
            new RequestOptions(
                endpoint: "situacoes",
                body: $body
            )
        );

        return CreateResponse::fromResponse($response);
    }

    /**
     * Altera uma situação.
     *
     * @param int $idSituacao ID da situação
     * @param array $body Corpo da requisição
     *
     * @return UpdateResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Situa%C3%A7%C3%B5es/put_situacoes__idSituacao_
     */
    public function update(int $idSituacao, array $body): UpdateResponse
    {
        $response = $this->repository->replace(
            new RequestOptions(
                endpoint: "situacoes/$idSituacao",
                body: $body
            )
        );

        return UpdateResponse::fromResponse($response);
    }
}
