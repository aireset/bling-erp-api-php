<?php

namespace Aireset\BlingErpApi\Entities\LogisticasEtiquetas;

use Aireset\BlingErpApi\Entities\LogisticasEtiquetas\Schema\Get\GetParams;
use Aireset\BlingErpApi\Entities\LogisticasEtiquetas\Schema\Get\GetResponse;
use Aireset\BlingErpApi\Entities\Shared\BaseEntity;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Exceptions\BlingApiException;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;

/**
 * Entidade para interação com logísticas - etiquetas.
 *
 * @see https://developer.bling.com.br/referencia#/Logísticas%20-%20Etiquetas
 */
class LogisticasEtiquetas extends BaseEntity
{
    /**
     * Obtém etiquetas das vendas.
     *
     * @param GetParams|array|null $params Parâmetros para a busca
     *
     * @return GetResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Log%C3%ADsticas%20-%20Etiquetas/get_logisticas_etiquetas
     */
    public function get(GetParams|array|null $params = null): GetResponse
    {
        $response = $this->repository->index(
            new RequestOptions(
                endpoint: "logisticas/etiquetas",
                queryParams: $params
            )
        );

        return GetResponse::fromResponse($response);
    }
}
