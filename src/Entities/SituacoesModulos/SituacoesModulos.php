<?php

namespace Aireset\BlingErpApi\Entities\SituacoesModulos;

use Aireset\BlingErpApi\Entities\Shared\BaseEntity;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Entities\SituacoesModulos\Schema\GetModules\GetModulesResponse;
use Aireset\BlingErpApi\Entities\SituacoesModulos\Schema\GetModuleActions\GetModuleActionsResponse;
use Aireset\BlingErpApi\Entities\SituacoesModulos\Schema\GetModuleSituations\GetModuleSituationsResponse;
use Aireset\BlingErpApi\Entities\SituacoesModulos\Schema\GetModuleTransitions\GetModuleTransitionsResponse;
use Aireset\BlingErpApi\Exceptions\BlingApiException;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;

/**
 * Entidade para interação com Situações - Módulos.
 *
 * @see https://developer.bling.com.br/referencia#/Situa%C3%A7%C3%B5es%20-%20M%C3%B3dulos
 */
class SituacoesModulos extends BaseEntity
{
    /**
     * Obtém módulos.
     *
     * @return GetModulesResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Situa%C3%A7%C3%B5es%20-%20M%C3%B3dulos/get_situacoes_modulos
     */
    public function getModules(): GetModulesResponse
    {
        $response = $this->repository->show(
            new RequestOptions(
                endpoint: "situacoes/modulos",
            )
        );

        return GetModulesResponse::fromResponse($response);
    }

    /**
     * Obtém situações de um módulo.
     * 
     * @param int $idModuloSistema
     *
     * @return GetModuleSituationsResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Situa%C3%A7%C3%B5es%20-%20M%C3%B3dulos/get_situacoes_modulos__idModuloSistema_
     */
    public function getModuleSituations(int $idModuloSistema): GetModuleSituationsResponse
    {
        $response = $this->repository->show(
            new RequestOptions(
                endpoint: "situacoes/modulos/$idModuloSistema",
            )
        );

        return GetModuleSituationsResponse::fromResponse($response);
    }

    /**
     * Obtém as ações de um módulo.
     * 
     * @param int $idModuloSistema
     *
     * @return GetModuleActionsResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Situa%C3%A7%C3%B5es%20-%20M%C3%B3dulos/get_situacoes_modulos__idModuloSistema_
     */
    public function getModuleActions(int $idModuloSistema): GetModuleActionsResponse
    {
        $response = $this->repository->show(
            new RequestOptions(
                endpoint: "situacoes/modulos/$idModuloSistema/acoes",
            )
        );

        return GetModuleActionsResponse::fromResponse($response);
    }

    /**
     * Obtém as transições de um módulo.
     * 
     * @param int $idModuloSistema
     *
     * @return GetModuleTransitionsResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Situa%C3%A7%C3%B5es%20-%20M%C3%B3dulos/get_situacoes_modulos__idModuloSistema_
     */
    public function getModuleTransitions(int $idModuloSistema): GetModuleTransitionsResponse
    {
        $response = $this->repository->show(
            new RequestOptions(
                endpoint: "situacoes/modulos/$idModuloSistema/transicoes",
            )
        );

        return GetModuleTransitionsResponse::fromResponse($response);
    }
}
