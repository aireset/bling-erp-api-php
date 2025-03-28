<?php

namespace Tests\Unit\Aireset\BlingErpApi\Entities\ContasReceber;

use Aireset\BlingErpApi\Entities\ContasReceber\ContasReceber;
use Aireset\BlingErpApi\Entities\ContasReceber\Schema\CancelBankSlips\CancelBankSlipsResponse;
use Aireset\BlingErpApi\Entities\ContasReceber\Schema\Create\CreateResponse;
use Aireset\BlingErpApi\Entities\ContasReceber\Schema\Find\FindResponse;
use Aireset\BlingErpApi\Entities\ContasReceber\Schema\Get\GetResponse;
use Aireset\BlingErpApi\Entities\ContasReceber\Schema\Update\UpdateResponse;
use Aireset\BlingErpApi\Entities\ContasReceber\Schema\Download\DownloadResponse;
use Aireset\BlingErpApi\Entities\ContasReceber\Schema\GetBankSlips\GetBankSlipsResponse;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Entities\Shared\TestResponseTrait;
use Aireset\BlingErpApi\Repositories\IBlingRepository;
use PHPUnit\Framework\TestCase;

/**
 * Teste de `ContasReceber`.
 */
class ContasReceberTest extends TestCase
{
    use TestResponseTrait;

    /**
     * Obtém a instância da entidade.
     *
     * @param IBlingRepository $repository
     *
     * @return ContasReceber
     */
    private function getInstance(IBlingRepository $repository): ContasReceber
    {
        return new ContasReceber($repository);
    }

    /**
     * Testa a deleção.
     *
     * @return void
     */
    public function testShouldDeleteSuccessfully(): void
    {
        $deleteResponse = json_decode(file_get_contents(__DIR__ . '/delete/response.json'), true);
        $idContaReceber = fake()->randomNumber();
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('destroy')
            ->with(
                $this->callback(
                    fn(RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "contas/receber/$idContaReceber"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($deleteResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->delete($idContaReceber);

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
                    $requestOptions->endpoint === "contas/receber"
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
        $idContaReceber = fake()->randomNumber();
        $findResponse = json_decode(file_get_contents(__DIR__ . '/find/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('show')
            ->with(
                $this->callback(
                    fn(RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "contas/receber/$idContaReceber"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($findResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->find($idContaReceber);

        $this->assertInstanceOf(FindResponse::class, $response);
        $this->assertEquals($findResponse, $response->toArray());
    }

    /**
     * Testa a visualização de boletos.
     *
     * @return void
     */
    public function testShouldGetBankSlipsSuccessfully(): void
    {
        $idContaReceber = fake()->randomNumber();
        $getBankSlipsResponse = json_decode(file_get_contents(__DIR__ . '/get-bank-slips/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('index')
            ->with(
                $this->callback(
                    fn(RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "contas/receber/boletos"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($getBankSlipsResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->getBankSlips($idContaReceber);

        $this->assertInstanceOf(GetBankSlipsResponse::class, $response);
        $this->assertEquals($getBankSlipsResponse, $response->toArray());
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
                    $requestOptions->endpoint === "contas/receber"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($createResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->create($createBody);

        $this->assertInstanceOf(CreateResponse::class, $response);
        $this->assertEquals($createResponse, $response->toArray());
    }

    /**
     * Testa a criação.
     *
     * @return void
     */
    public function testShouldDownloadSuccessfully(): void
    {
        $idContaReceber = fake()->randomNumber();
        $downloadBody = json_decode(file_get_contents(__DIR__ . '/download/request.json'), true);
        $downloadResponse = json_decode(file_get_contents(__DIR__ . '/download/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('store')
            ->with(
                $this->callback(
                    fn(RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "contas/receber/$idContaReceber/baixar"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($downloadResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->download($idContaReceber, $downloadBody);

        $this->assertInstanceOf(DownloadResponse::class, $response);
        $this->assertEquals($downloadResponse, $response->toArray());
    }

    /**
     * Testa o cancelamento de boletos.
     *
     * @return void
     */
    public function testShouldCancelBankSlipsSuccessfully(): void
    {
        $cancelBankSlipsBody = json_decode(file_get_contents(__DIR__ . '/cancel-bank-slips/request.json'), true);
        $cancelBankSlipsResponse = json_decode(file_get_contents(__DIR__ . '/cancel-bank-slips/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('store')
            ->with(
                $this->callback(
                    fn(RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "contas/receber/boletos/cancelar"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($cancelBankSlipsResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->cancelBankSlips($cancelBankSlipsBody);

        $this->assertNull($response);
    }

    /**
     * Testa a atualização.
     *
     * @return void
     */
    public function testShouldUpdateSuccessfully(): void
    {
        $idContaReceber = fake()->randomNumber();
        $updateBody = json_decode(file_get_contents(__DIR__ . '/update/request.json'), true);
        $updateResponse = json_decode(file_get_contents(__DIR__ . '/update/response.json'), true);
        $repository = $this->getMockBuilder(IBlingRepository::class)->getMock();
        $repository->expects($this->once())
            ->method('replace')
            ->with(
                $this->callback(
                    fn(RequestOptions $requestOptions) =>
                    $requestOptions->endpoint === "contas/receber/$idContaReceber"
                )
            )
            ->willReturn($this->buildResponse(status: 200, body: $this->buildBody($updateResponse)));

        /** @var IBlingRepository $repository */
        $response = $this->getInstance($repository)->update($idContaReceber, $updateBody);

        $this->assertInstanceOf(UpdateResponse::class, $response);
        $this->assertEquals($updateResponse, $response->toArray());
    }
}
