<?php

namespace Tests\Unit\Aireset\BlingErpApi\Entities\Contratos;

use Aireset\BlingErpApi\Entities\Contratos\Contratos;
use Aireset\BlingErpApi\Entities\Contratos\Schema\Create\CreateResponse;
use Aireset\BlingErpApi\Entities\Contratos\Schema\Find\FindResponse;
use Aireset\BlingErpApi\Entities\Contratos\Schema\Get\GetResponse;
use Aireset\BlingErpApi\Entities\Contratos\Schema\Update\UpdateResponse;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Entities\Shared\TestResponseTrait;
use Aireset\BlingErpApi\Repositories\IBlingRepository;
use PHPUnit\Framework\TestCase;

/**
 * Teste de `Contratos`.
 */
class ContratosTest extends TestCase
{
    use TestResponseTrait;

    /**
     * Obtém a instância da entidade.
     *
     * @param IBlingRepository $repository
     *
     * @return Contratos
     */
    private function getInstance(IBlingRepository $repository): Contratos
    {
        return new Contratos($repository);
    }

    /**
     * Testa a deleção.
     *
     * @return void
     */
    public function testShouldDeleteSuccessfully(): void
    {
        $deleteResponse = json_decode(file_get_contents(__DIR__ . '/delete/response.json'), true);
        $idContrato = fake()->randomNumber();
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('destroy')
            ->with(
                $this->callback(
                    fn(RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "contratos/$idContrato"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($deleteResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->delete($idContrato);

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
                    fn(RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "contratos"
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
        $idContrato = fake()->randomNumber();
        $findResponse = json_decode(file_get_contents(__DIR__ . '/find/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('show')
            ->with(
                $this->callback(
                    fn(RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "contratos/$idContrato"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($findResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->find($idContrato);

        $this->assertInstanceOf(FindResponse::class, $response);
        $this->assertEquals($findResponse, $response->toArray());
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
                    fn(RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "contratos"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($createResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->create($createBody);

        $this->assertInstanceOf(CreateResponse::class, $response);
        $this->assertEquals($createResponse, $response->toArray());
    }

    /**
     * Testa a atualização.
     *
     * @return void
     */
    public function testShouldUpdateSuccessfully(): void
    {
        $idContrato = fake()->randomNumber();
        $updateBody = json_decode(file_get_contents(__DIR__ . '/update/request.json'), true);
        $updateResponse = json_decode(file_get_contents(__DIR__ . '/update/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('replace')
            ->with(
                $this->callback(
                    fn(RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "contratos/$idContrato"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($updateResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->update($idContrato, $updateBody);


        $this->assertInstanceOf(UpdateResponse::class, $response);
        $this->assertEquals($updateResponse, $response->toArray());
    }
}
