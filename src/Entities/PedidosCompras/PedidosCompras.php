<?php

namespace Aireset\BlingErpApi\Entities\PedidosCompras;

use Aireset\BlingErpApi\Entities\PedidosCompras\Schema\Delete\DeleteResponse;
use Aireset\BlingErpApi\Entities\PedidosCompras\Schema\ChangeSituation\ChangeSituationResponse;
use Aireset\BlingErpApi\Entities\PedidosCompras\Schema\Get\GetParams;
use Aireset\BlingErpApi\Entities\PedidosCompras\Schema\Create\CreateResponse;
use Aireset\BlingErpApi\Entities\PedidosCompras\Schema\Find\FindResponse;
use Aireset\BlingErpApi\Entities\PedidosCompras\Schema\Get\GetResponse;
use Aireset\BlingErpApi\Entities\PedidosCompras\Schema\PostAccounts\PostAccountsResponse;
use Aireset\BlingErpApi\Entities\PedidosCompras\Schema\PostStock\PostStockResponse;
use Aireset\BlingErpApi\Entities\PedidosCompras\Schema\ReverseAccounts\ReverseAccountsResponse;
use Aireset\BlingErpApi\Entities\PedidosCompras\Schema\ReverseStock\ReverseStockResponse;
use Aireset\BlingErpApi\Entities\PedidosCompras\Schema\Update\UpdateResponse;
use Aireset\BlingErpApi\Entities\Shared\BaseEntity;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Exceptions\BlingApiException;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;

/**
 * Entidade para interação com Pedidos de Compras.
 *
 * @see https://developer.bling.com.br/referencia#/Pedidos%20-%20Compras
 */
class PedidosCompras extends BaseEntity
{
    /**
     * Remove um pedido de compra.
     *
     * @param int $idPedidoCompra ID do pedido de compra
     *
     * @return null
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Pedidos%20-%20Compras/delete_pedidos_compras__idPedidoCompra_
     */
    public function delete(int $idPedidoCompra): null
    {
        $response = $this->repository->destroy(
            new RequestOptions(
                endpoint: "pedidos/compras/$idPedidoCompra",
            )
        );

        return DeleteResponse::fromResponse($response);
    }

    /**
     * Obtém pedidos de compras.
     *
     * @param GetParams|array|null $params Parâmetros para a busca
     *
     * @return GetResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Pedidos%20-%20Compras/get_pedidos_compras
     */
    public function get(GetParams|array|null $params = null): GetResponse
    {
        $response = $this->repository->index(
            new RequestOptions(
                endpoint: "pedidos/compras",
                queryParams: $params
            )
        );

        return GetResponse::fromResponse($response);
    }

    /**
     * Obtém um pedido de compra.
     *
     * @param int $idPedidoCompra ID do pedido de compra
     *
     * @return FindResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Pedidos%20-%20Compras/get_pedidos_compras__idPedidoCompra_
     */
    public function find(int $idPedidoCompra): FindResponse
    {
        $response = $this->repository->show(
            new RequestOptions(
                endpoint: "pedidos/compras/$idPedidoCompra",
            )
        );

        return FindResponse::fromResponse($response);
    }

    /**
     * Altera a situação de um pedido de compra.
     *
     * @param int $idPedidoCompra ID do pedido de compra
     * @param array $body Corpo da requisição
     *
     * @return null
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Pedidos%20-%20Compras/patch_pedidos_compras__idPedidoCompra__situacoes
     */
    public function changeSituation(int $idPedidoCompra, array $body): null
    {
        $response = $this->repository->update(
            new RequestOptions(
                endpoint: "pedidos/compras/$idPedidoCompra/situacoes",
                body: $body
            )
        );

        return ChangeSituationResponse::fromResponse($response);
    }

    /**
     * Cria um pedido de compra.
     *
     * @param array $body Corpo da requisição
     *
     * @return CreateResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Pedidos%20-%20Compras/post_pedidos_compras
     */
    public function create(array $body): CreateResponse
    {
        $response = $this->repository->store(
            new RequestOptions(
                endpoint: "pedidos/compras",
                body: $body
            )
        );

        return CreateResponse::fromResponse($response);
    }

    /**
     * Lança as contas de um pedido de compra.
     *
     * @param int $idPedidoCompra ID do pedido de compra
     *
     * @return null
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Pedidos%20-%20Compras/post_pedidos_compras__idPedidoCompra__lancar_contas
     */
    public function postAccounts(int $idPedidoCompra): null
    {
        $response = $this->repository->store(
            new RequestOptions(
                endpoint: "pedidos/compras/$idPedidoCompra/lancar-contas",
            )
        );

        return PostAccountsResponse::fromResponse($response);
    }

    /**
     * Estorna as contas de um pedido de compra.
     *
     * @param int $idPedidoCompra ID do pedido de compra
     *
     * @return null
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Pedidos%20-%20Compras/post_pedidos_compras__idPedidoCompra__estornar_contas
     */
    public function reverseAccounts(int $idPedidoCompra): null
    {
        $response = $this->repository->store(
            new RequestOptions(
                endpoint: "pedidos/compras/$idPedidoCompra/estornar-contas",
            )
        );

        return ReverseAccountsResponse::fromResponse($response);
    }

    /**
     * Lança o estoque de um pedido de compra.
     *
     * @param int $idPedidoCompra ID do pedido de compra
     *
     * @return null
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Pedidos%20-%20Compras/post_pedidos_compras__idPedidoCompra__lancar_estoque
     */
    public function postStock(int $idPedidoCompra): null
    {
        $response = $this->repository->store(
            new RequestOptions(
                endpoint: "pedidos/compras/$idPedidoCompra/lancar-estoque",
            )
        );

        return PostStockResponse::fromResponse($response);
    }

    /**
     * Estorna o estoque de um pedido de compra.
     *
     * @param int $idPedidoCompra ID do pedido de compra
     *
     * @return null
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Pedidos%20-%20Compras/post_pedidos_compras__idPedidoCompra__estornar_estoque
     */
    public function reverseStock(int $idPedidoCompra): null
    {
        $response = $this->repository->store(
            new RequestOptions(
                endpoint: "pedidos/compras/$idPedidoCompra/estornar-estoque",
            )
        );

        return ReverseStockResponse::fromResponse($response);
    }

    /**
     * Altera um pedido de compra.
     *
     * @param int $idPedidoCompra ID do pedido de compra
     * @param array $body Corpo da requisição
     *
     * @return UpdateResponse
     * @throws BlingApiException|BlingInternalException
     *
     * @see https://developer.bling.com.br/referencia#/Pedidos%20-%20Compras/put_pedidos_compras__idPedidoCompra_
     */
    public function update(int $idPedidoCompra, array $body): UpdateResponse
    {
        $response = $this->repository->replace(
            new RequestOptions(
                endpoint: "pedidos/compras/$idPedidoCompra",
                body: $body
            )
        );

        return UpdateResponse::fromResponse($response);
    }
}
