<?php

namespace Tests\Unit\Aireset\BlingErpApi\Entities\PedidosCompras;

use Aireset\BlingErpApi\Entities\PedidosCompras\PedidosCompras;
use Aireset\BlingErpApi\Entities\PedidosCompras\Schema\Create\CreateResponse;
use Aireset\BlingErpApi\Entities\PedidosCompras\Schema\Find\FindResponse;
use Aireset\BlingErpApi\Entities\PedidosCompras\Schema\Get\GetResponse;
use Aireset\BlingErpApi\Entities\PedidosCompras\Schema\Update\UpdateResponse;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Entities\Shared\TestResponseTrait;
use Aireset\BlingErpApi\Repositories\IBlingRepository;
use PHPUnit\Framework\TestCase;

/**
 * Teste de `PedidosCompras`.
 */
class PedidosComprasTest extends TestCase
{
    use TestResponseTrait;

    /**
     * Obtém a instância da entidade.
     *
     * @param IBlingRepository $repository
     *
     * @return PedidosCompras
     */
    private function getInstance(IBlingRepository $repository): PedidosCompras
    {
        return new PedidosCompras($repository);
    }

    /**
     * Testa a deleção.
     *
     * @return void
     */
    public function testShouldDeleteSuccessfully(): void
    {
        $idPedidoCompra = fake()->randomNumber();
        $deleteResponse = json_decode(file_get_contents(__DIR__ . '/delete/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('destroy')
            ->with(
                $this->callback(
                    fn (RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "pedidos/compras/$idPedidoCompra"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($deleteResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->delete(
            idPedidoCompra: $idPedidoCompra
        );

        $this->assertNull($response);
    }

    /**
     * Testa a listagem.
     *
     * @return void
     */
    public function testShouldGetSuccessfully(): void
    {
        $getResponse = json_decode(file_get_contents(__DIR__ . '/get/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('index')
            ->with(
                $this->callback(
                    fn (RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "pedidos/compras"
                        && is_null($requestOptions->queryParams)
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($getResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->get();

        $this->assertInstanceOf(GetResponse::class, $response);
        $this->assertEquals($getResponse, $response->toArray());
    }

    /**
     * Testa a busca pontual.
     *
     * @return void
     */
    public function testShouldFindSuccessfully(): void
    {
        $idPedidoCompra = fake()->randomNumber();
        $findResponse = json_decode(file_get_contents(__DIR__ . '/find/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('show')
            ->with(
                $this->callback(
                    fn (RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "pedidos/compras/$idPedidoCompra"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($findResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->find($idPedidoCompra);

        $this->assertInstanceOf(FindResponse::class, $response);
        $this->assertEquals($findResponse, $response->toArray());
    }

    /**
     * Testa a criação.
     *
     * @return void
     */
    public function testShouldChangeSituationSuccessfully(): void
    {
        $idPedidoCompra = fake()->randomNumber();
        $changeSituationBody = json_decode(file_get_contents(__DIR__ . '/change-situation/request.json'), true);
        $changeSituationResponse = json_decode(file_get_contents(__DIR__ . '/change-situation/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('update')
            ->with(
                $this->callback(
                    fn (RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "pedidos/compras/$idPedidoCompra/situacoes"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($changeSituationResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->changeSituation(
            idPedidoCompra: $idPedidoCompra,
            body: $changeSituationBody
        );

        $this->assertNull($response);
    }

    /**
     * Testa a criação.
     *
     * @return void
     */
    public function testShouldCreateSuccessfully(): void
    {
        $createBody = json_decode(file_get_contents(__DIR__ . '/create/request.json'), true);
        $createResponse = json_decode(file_get_contents(__DIR__ . '/create/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('store')
            ->with(
                $this->callback(
                    fn (RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "pedidos/compras"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($createResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->create($createBody);

        $this->assertInstanceOf(CreateResponse::class, $response);
        $this->assertEquals($createResponse, $response->toArray());
    }

    /**
     * Testa o lançamento de contas.
     *
     * @return void
     */
    public function testShouldPostAccountsSuccessfully(): void
    {
        $idPedidoCompra = fake()->randomNumber();
        $postAccountsResponse = json_decode(file_get_contents(__DIR__ . '/post-accounts/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('store')
            ->with(
                $this->callback(
                    fn (RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "pedidos/compras/$idPedidoCompra/lancar-contas"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($postAccountsResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->postAccounts($idPedidoCompra);

        $this->assertNull($response);
    }

    /**
     * Testa o estorno de contas.
     *
     * @return void
     */
    public function testShouldReverseAccountsSuccessfully(): void
    {
        $idPedidoCompra = fake()->randomNumber();
        $reverseAccountsResponse = json_decode(file_get_contents(__DIR__ . '/reverse-accounts/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('store')
            ->with(
                $this->callback(
                    fn (RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "pedidos/compras/$idPedidoCompra/estornar-contas"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($reverseAccountsResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->reverseAccounts($idPedidoCompra);

        $this->assertNull($response);
    }

    /**
     * Testa o lançamento de estoque.
     *
     * @return void
     */
    public function testShouldPostStockSuccessfully(): void
    {
        $idPedidoCompra = fake()->randomNumber();
        $postStockResponse = json_decode(file_get_contents(__DIR__ . '/post-stock/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('store')
            ->with(
                $this->callback(
                    fn (RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "pedidos/compras/$idPedidoCompra/lancar-estoque"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($postStockResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->postStock($idPedidoCompra);

        $this->assertNull($response);
    }

    /**
     * Testa o estorno do estoque.
     *
     * @return void
     */
    public function testShouldReverseStockSuccessfully(): void
    {
        $idPedidoCompra = fake()->randomNumber();
        $reverseStockResponse = json_decode(file_get_contents(__DIR__ . '/reverse-stock/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('store')
            ->with(
                $this->callback(
                    fn (RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "pedidos/compras/$idPedidoCompra/estornar-estoque"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($reverseStockResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->reverseStock($idPedidoCompra);

        $this->assertNull($response);
    }

    /**
     * Testa a atualização.
     *
     * @return void
     */
    public function testShouldUpdateSuccessfully(): void
    {
        $idPedidoCompra = fake()->randomNumber();
        $updateBody = json_decode(file_get_contents(__DIR__ . '/update/request.json'), true);
        $updateResponse = json_decode(file_get_contents(__DIR__ . '/update/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('replace')
            ->with(
                $this->callback(
                    fn (RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "pedidos/compras/$idPedidoCompra"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($updateResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->update($idPedidoCompra, $updateBody);

        $this->assertInstanceOf(UpdateResponse::class, $response);
        $this->assertEquals($updateResponse, $response->toArray());
    }
}
