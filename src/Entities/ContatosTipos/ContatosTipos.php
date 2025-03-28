<?php

namespace Aireset\BlingErpApi\Entities\ContatosTipos;

use Aireset\BlingErpApi\Entities\ContatosTipos\Schema\Get\GetParams;
use Aireset\BlingErpApi\Entities\ContatosTipos\Schema\Get\GetResponse;
use Aireset\BlingErpApi\Entities\Shared\BaseEntity;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Exceptions\BlingApiException;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;

/**
 * Entidade para interação com contatos - tipos.
 *
 * @see https://developer.bling.com.br/referencia#/Contatos%20-%20Tipos
 */
class ContatosTipos extends BaseEntity
{
    /**
     * Obtém tipos de contato.
     * 
     * @return GetResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Contatos%20-%20Tipos/get_contatos_tipos
     */
    public function get(): GetResponse
    {
        $response = $this->repository->index(
            new RequestOptions(
                endpoint: "contatos/tipos"
            )
        );

        return GetResponse::fromResponse($response);
    }
}
