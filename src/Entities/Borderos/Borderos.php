<?php

namespace Aireset\BlingErpApi\Entities\Borderos;

use Aireset\BlingErpApi\Entities\Borderos\Schema\Delete\DeleteResponse;
use Aireset\BlingErpApi\Entities\Borderos\Schema\Find\FindResponse;
use Aireset\BlingErpApi\Entities\Shared\BaseEntity;
use Aireset\BlingErpApi\Entities\Shared\DTO\Request\RequestOptions;
use Aireset\BlingErpApi\Exceptions\BlingApiException;
use Aireset\BlingErpApi\Exceptions\BlingInternalException;

/**
 * Entidade para interação com borderôs.
 *
 * @see https://developer.bling.com.br/referencia#/Border%C3%B4s
 */
class Borderos extends BaseEntity
{
  /**
   * Remove um borderô.
   *
   * @param int $idBordero ID para deleção.
   *
   * @return null Não há retorno.
   * @throws BlingApiException|BlingInternalException
   *
   * @see https://developer.bling.com.br/referencia#/Border%C3%B4s/delete_borderos__idBordero_
   */
  public function delete(int $idBordero): null
  {
    $response = $this->repository->destroy(
      new RequestOptions(
        endpoint: "borderos/$idBordero"
      )
    );

    return DeleteResponse::fromResponse($response);
  }

  /**
   * Encontra um borderô.
   *
   * @param int Parâmetros para a busca (somente o ID).
   *
   * @return FindResponse Os dados do borderô pesquisado.
   * @throws BlingApiException|BlingInternalException
   *
   * @see https://developer.bling.com.br/referencia#/Border%C3%B4s/get_borderos__idBordero_
   */
  public function find(int $idBordero): FindResponse
  {
    $response = $this->repository->show(
      new RequestOptions(
        endpoint: "borderos/$idBordero"
      )
    );

    return FindResponse::fromResponse($response);
  }
}
