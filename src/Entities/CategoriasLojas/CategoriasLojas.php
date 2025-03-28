<?php

namespace Aireset\BlingErpApi\Entities\CategoriasLojas;

use Aireset\BlingErpApi\Entities\CategoriasLojas\Schema\Get\GetParams;
use Aireset\BlingErpApi\Entities\CategoriasLojas\Schema\Create\CreateResponse;
use Aireset\BlingErpApi\Entities\CategoriasLojas\Schema\Delete\DeleteResponse;
use Aireset\BlingErpApi\Entities\CategoriasLojas\Schema\Find\FindResponse;
use Aireset\BlingErpApi\Entities\CategoriasLojas\Schema\Get\GetResponse;
use Aireset\BlingErpApi\Entities\CategoriasLojas\Schema\Update\UpdateResponse;
use Aireset\BlingErpApi\Entities\Shared\BaseEntity;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Exceptions\BlingApiException;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;

/**
 * Entidade para interação com categorias - lojas.
 *
 * @see https://developer.bling.com.br/referencia#/Categorias%20-%20Lojas
 */
class CategoriasLojas extends BaseEntity
{
    /**
     * Remove o vínculo de uma categoria da loja com a de produto.
     *
     * @param int $idCategoriaLoja ID do vínculo da categoria de produto com a da loja
     *
     * @return null
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Categorias%20-%20Lojas/delete_categorias_lojas__idCategoriaLoja_
     */
    public function delete(int $idCategoriaLoja): null
    {
        $response = $this->repository->destroy(
            new RequestOptions(
                endpoint: "categorias/lojas/$idCategoriaLoja"
            )
        );

        return DeleteResponse::fromResponse($response);
    }

    /**
     * Obtém categorias de lojas virtuais vinculadas a de produtos.
     *
     * @param GetParams|array|null $params Parâmetros para a busca
     * 
     * @return GetResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Categorias%20-%20Lojas/get_categorias_lojas
     */
    public function get(GetParams|array|null $params = null): GetResponse
    {
        $response = $this->repository->index(
            new RequestOptions(
                endpoint: "categorias/lojas",
                queryParams: $params
            )
        );

        return GetResponse::fromResponse($response);
    }

    /**
     * Obtém uma categoria da loja vinculada a de produto.
     * 
     * @param int $idCategoriaLoja ID do vínculo da categoria de produto com a da loja
     * 
     * @return FindResponse
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Categorias%20-%20Lojas/get_categorias_lojas__idCategoriaLoja_
     */
    public function find(int $idCategoriaLoja): FindResponse
    {
        $response = $this->repository->show(
            new RequestOptions(
                endpoint: "categorias/lojas/$idCategoriaLoja",
            )
        );

        return FindResponse::fromResponse($response);
    }

    /**
     * Cria o vínculo de uma categoria da loja com a de produto.
     * 
     * @param array $body Corpo da requisição
     * 
     * @return CreateResponse
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Categorias%20-%20Lojas/post_categorias_lojas
     */
    public function create(array $body): CreateResponse
    {
        $response = $this->repository->store(
            new RequestOptions(
                endpoint: "categorias/lojas",
                body: $body
            )
        );

        return CreateResponse::fromResponse($response);
    }

    /**
     * Altera o vínculo de uma categoria da loja com a de produto.
     * 
     * @param int $idCategoriaLoja ID do vínculo da categoria de produto com a da loja
     * @param array $body Corpo da requisição
     * 
     * @return null
     * @throws BlingApiException|BlingInternalException
     * 
     * @see https://developer.bling.com.br/referencia#/Categorias%20-%20Lojas/put_categorias_lojas__idCategoriaLoja_
     */
    public function update(int $idCategoriaLoja, array $body): null
    {
        $response = $this->repository->replace(
            new RequestOptions(
                endpoint: "categorias/lojas/$idCategoriaLoja",
                body: $body
            )
        );

        return UpdateResponse::fromResponse($response);
    }
}
