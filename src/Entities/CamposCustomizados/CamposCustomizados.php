<?php

namespace Aireset\BlingErpApi\Entities\CamposCustomizados;

use Aireset\BlingErpApi\Entities\CamposCustomizados\Schema\Delete\DeleteResponse;
use Aireset\BlingErpApi\Entities\CamposCustomizados\Schema\Find\FindResponse;
use Aireset\BlingErpApi\Entities\CamposCustomizados\Schema\ChangeSituation\ChangeSituationResponse;
use Aireset\BlingErpApi\Entities\CamposCustomizados\Schema\Create\CreateResponse;
use Aireset\BlingErpApi\Entities\CamposCustomizados\Schema\FindByModule\FindByModuleParams;
use Aireset\BlingErpApi\Entities\CamposCustomizados\Schema\FindByModule\FindByModuleResponse;
use Aireset\BlingErpApi\Entities\CamposCustomizados\Schema\GetModules\GetModulesResponse;
use Aireset\BlingErpApi\Entities\CamposCustomizados\Schema\GetTypes\GetTypesResponse;
use Aireset\BlingErpApi\Entities\CamposCustomizados\Schema\Update\UpdateResponse;
use Aireset\BlingErpApi\Entities\Shared\BaseEntity;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Exceptions\BlingApiException;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;

/**
 * Entidade para interação com campos customizados.
 *
 * @see https://developer.bling.com.br/referencia#/Campos%20Customizados
 */
class CamposCustomizados extends BaseEntity
{
    /**
     * Remove um campo customizado.
     *
     * @param int $idCampoCustomizado ID para deleção.
     *
     * @return null
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Campos%20Customizados/delete_campos_customizados__idCampoCustomizado_
     */
    public function delete(int $idCampoCustomizado): null
    {
        $response = $this->repository->destroy(
            new RequestOptions(
                endpoint: "campos-customizados/$idCampoCustomizado"
            )
        );

        return DeleteResponse::fromResponse($response);
    }

    /**
     * Obtém módulos que possuem campos customizados.
     *
     * @return GetModulesResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Campos%20Customizados/get_campos_customizados_modulos
     */
    public function getModules(): GetModulesResponse
    {
        $response = $this->repository->index(
            new RequestOptions(
                endpoint: "campos-customizados/modulos"
            )
        );

        return GetModulesResponse::fromResponse($response);
    }

    /**
     * Obtém tipos de campos customizados.
     * 
     * @return GetTypesResponse
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Campos%20Customizados/get_campos_customizados_tipos
     */
    public function getTypes(): GetTypesResponse
    {
        $response = $this->repository->index(
            new RequestOptions(
                endpoint: "campos-customizados/tipos"
            )
        );

        return GetTypesResponse::fromResponse($response);
    }

    /**
     * Obtém campos customizados por módulo.
     * 
     * @param int $idModulo ID do módulo.
     * @param FindByModuleParams|array|null $params Parâmetros da busca.
     * 
     * @return FindByModuleResponse
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Campos%20Customizados/get_campos_customizados_modulos__idModulo_
     */
    public function findByModule(
        int $idModulo,
        FindByModuleParams|array|null $params = null
    ): FindByModuleResponse {
        $response = $this->repository->index(
            new RequestOptions(
                endpoint: "campos-customizados/modulos/$idModulo",
                queryParams: $params
            )
        );

        return FindByModuleResponse::fromResponse($response);
    }

    /**
     * Obtém um campo customizado.
     * 
     * @param int $idCampoCustomizado ID do campo customizado.
     * 
     * @return FindResponse
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Campos%20Customizados/get_campos_customizados__idCampoCustomizado_
     */
    public function find(int $idCampoCustomizado): FindResponse
    {
        $response = $this->repository->show(
            new RequestOptions(
                endpoint: "campos-customizados/$idCampoCustomizado",
            )
        );

        return FindResponse::fromResponse($response);
    }

    /**
     * Altera a situação de um campo customizado.
     * 
     * @param int $idCampoCustomizado ID do campo customizado.
     * @param array $body Corpo da requisição.
     * 
     * @return null
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Campos%20Customizados/patch_campos_customizados__idCampoCustomizado__situacoes
     */
    public function changeSituation(int $idCampoCustomizado, array $body): null
    {
        $response = $this->repository->update(
            new RequestOptions(
                endpoint: "campos-customizados/$idCampoCustomizado/situacoes",
                body: $body
            )
        );

        return ChangeSituationResponse::fromResponse($response);
    }

    /**
     * Cria um campo customizado.
     * 
     * @param array $body Corpo da requisição.
     * 
     * @return CreateResponse
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Campos%20Customizados/post_campos_customizados
     */
    public function create(array $body): CreateResponse
    {
        $response = $this->repository->store(
            new RequestOptions(
                endpoint: "campos-customizados",
                body: $body
            )
        );

        return CreateResponse::fromResponse($response);
    }

    /**
     * Altera um campo customizado.
     * 
     * @param int $idCampoCustomizado O ID do campo customizado.
     * @param array $body Corpo da requisição.
     * 
     * @return UpdateResponse
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Campos%20Customizados/put_campos_customizados__idCampoCustomizado_
     */
    public function update(int $idCampoCustomizado, array $body): UpdateResponse
    {
        $response = $this->repository->replace(
            new RequestOptions(
                endpoint: "campos-customizados/$idCampoCustomizado",
                body: $body
            )
        );

        return UpdateResponse::fromResponse($response);
    }
}
