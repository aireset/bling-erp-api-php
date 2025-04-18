<?php

namespace Aireset\BlingErpApi\Entities\Nfses;

use Aireset\BlingErpApi\Entities\Nfses\Schema\Cancel\CancelResponse;
use Aireset\BlingErpApi\Entities\Nfses\Schema\Get\GetParams;
use Aireset\BlingErpApi\Entities\Nfses\Schema\Create\CreateResponse;
use Aireset\BlingErpApi\Entities\Nfses\Schema\Delete\DeleteResponse;
use Aireset\BlingErpApi\Entities\Nfses\Schema\Find\FindResponse;
use Aireset\BlingErpApi\Entities\Nfses\Schema\Get\GetResponse;
use Aireset\BlingErpApi\Entities\Nfses\Schema\GetConfigurations\GetConfigurationsResponse;
use Aireset\BlingErpApi\Entities\Nfses\Schema\Send\SendResponse;
use Aireset\BlingErpApi\Entities\Nfses\Schema\UpdateConfigurations\UpdateConfigurationsResponse;
use Aireset\BlingErpApi\Entities\Shared\BaseEntity;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Exceptions\BlingApiException;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;

/**
 * Entidade para interação com NFS-es.
 *
 * @see https://developer.bling.com.br/referencia#/Notas%20Fiscais%20de%20Servi%C3%A7o%20Eletr%C3%B4nicas
 */
class Nfses extends BaseEntity
{
    /**
     * Exclui uma nota de serviço.
     * 
     * @param int $idNotaServico ID da nota de serviço
     *
     * @return null
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Notas%20Fiscais%20de%20Servi%C3%A7o%20Eletr%C3%B4nicas/delete_nfse__idNotaServico_
     */
    public function delete(int $idNotaServico): null
    {
        $response = $this->repository->destroy(
            new RequestOptions(
                endpoint: "nfse/$idNotaServico"
            )
        );

        return DeleteResponse::fromResponse($response);
    }

    /**
     * Obtém notas de serviços.
     *
     * @param GetParams|array|null $params Parâmetros para a busca
     *
     * @return GetResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Notas%20Fiscais%20de%20Servi%C3%A7o%20Eletr%C3%B4nicas/get_nfse
     */
    public function get(GetParams|array|null $params = null): GetResponse
    {
        $response = $this->repository->index(
            new RequestOptions(
                endpoint: "nfse",
                queryParams: $params
            )
        );

        return GetResponse::fromResponse($response);
    }

    /**
     * Obtém uma nota de serviço.
     *
     * @param int $idNotaServico ID da nota de serviço
     *
     * @return FindResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Notas%20Fiscais%20de%20Servi%C3%A7o%20Eletr%C3%B4nicas/get_nfse__idNotaServico_
     */
    public function find(int $idNotaServico): FindResponse
    {
        $response = $this->repository->show(
            new RequestOptions(
                endpoint: "nfse/$idNotaServico",
            )
        );

        return FindResponse::fromResponse($response);
    }

    /**
     * Configurações de nota de serviço.
     *
     * @return GetConfigurationsResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Notas%20Fiscais%20de%20Servi%C3%A7o%20Eletr%C3%B4nicas/get_nfse_configuracoes
     */
    public function getConfigurations(): GetConfigurationsResponse
    {
        $response = $this->repository->index(
            new RequestOptions(
                endpoint: "nfse/configurations",
            )
        );

        return GetConfigurationsResponse::fromResponse($response);
    }

    /**
     * Cria uma nota de serviço.
     *
     * @param array $body Corpo da requisição
     *
     * @return CreateResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Notas%20Fiscais%20de%20Servi%C3%A7o%20Eletr%C3%B4nicas/post_nfse
     */
    public function create(array $body): CreateResponse
    {
        $response = $this->repository->store(
            new RequestOptions(
                endpoint: "nfse",
                body: $body
            )
        );

        return CreateResponse::fromResponse($response);
    }

    /**
     * Envia uma nota de serviço.
     *
     * @param int $idNotaServico ID da nota de serviço
     *
     * @return SendResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Notas%20Fiscais%20de%20Servi%C3%A7o%20Eletr%C3%B4nicas/post_nfse__idNotaServico__enviar
     */
    public function send(int $idNotaServico): SendResponse
    {
        $response = $this->repository->store(
            new RequestOptions(
                endpoint: "nfse/$idNotaServico/enviar",
            )
        );

        return SendResponse::fromResponse($response);
    }

    /**
     * Cancela uma nota de serviço.
     *
     * @param int $idNotaServico ID da nota de serviço
     * @param array $body Corpo da requisição
     *
     * @return null
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Notas%20Fiscais%20de%20Servi%C3%A7o%20Eletr%C3%B4nicas/post_nfse__idNotaServico__cancelar
     */
    public function cancel(int $idNotaServico, array $body): null
    {
        $response = $this->repository->store(
            new RequestOptions(
                endpoint: "nfse/$idNotaServico/cancelar",
                body: $body
            )
        );

        return CancelResponse::fromResponse($response);
    }

    /**
     * Configurações de nota de serviço.
     *
     * @param array $body Corpo da requisição
     *
     * @return null
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Notas%20Fiscais%20de%20Servi%C3%A7o%20Eletr%C3%B4nicas/put_nfse_configuracoes
     */
    public function updateConfigurations(array $body): null
    {
        $response = $this->repository->replace(
            new RequestOptions(
                endpoint: "nfse/configuracoes",
                body: $body
            )
        );

        return UpdateConfigurationsResponse::fromResponse($response);
    }
}
