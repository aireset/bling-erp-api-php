<?php

namespace Tests\Unit\Aireset\BlingErpApi\Entities\CanaisDeVenda;

use Aireset\BlingErpApi\Entities\CanaisDeVenda\CanaisDeVenda;
use Aireset\BlingErpApi\Entities\CanaisDeVenda\Schema\Find\FindResponse;
use Aireset\BlingErpApi\Entities\CanaisDeVenda\Schema\Get\GetResponse;
use Aireset\BlingErpApi\Entities\CanaisDeVenda\Schema\GetTypes\GetTypesResponse;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Entities\Shared\TestResponseTrait;
use Aireset\BlingErpApi\Repositories\IBlingRepository;
use PHPUnit\Framework\TestCase;

/**
 * Teste de `CanaisDeVenda`.
 */
class CanaisDeVendaTest extends TestCase
{
    use TestResponseTrait;

    /**
     * Obtém a instância da entidade.
     *
     * @param IBlingRepository $repository
     *
     * @return CanaisDeVenda
     */
    private function getInstance(IBlingRepository $repository): CanaisDeVenda
    {
        return new CanaisDeVenda($repository);
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
                    $requestOptions->endpoint === "canais-venda"
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
        $idCanalVenda = fake()->randomNumber();
        $findResponse = json_decode(file_get_contents(__DIR__ . '/find/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('show')
            ->with(
                $this->callback(
                    fn (RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "canais-venda/$idCanalVenda"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($findResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->find($idCanalVenda);

        $this->assertInstanceOf(FindResponse::class, $response);
        $this->assertEquals($findResponse, $response->toArray());
    }

    /**
     * Testa a listagem.
     *
     * @return void
     */
    public function testShouldGetTypesSuccessfully(): void
    {
        $getTypesResponse = json_decode(file_get_contents(__DIR__ . '/get-types/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('index')
            ->with(
                $this->callback(
                    fn (RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "canais-venda/tipos"
                        && is_null($requestOptions->queryParams)
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($getTypesResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->getTypes();

        $this->assertInstanceOf(GetTypesResponse::class, $response);
        $this->assertEquals($getTypesResponse, $response->toArray());
    }
}
