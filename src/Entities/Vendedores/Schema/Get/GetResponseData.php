<?php

namespace Aireset\BlingErpApi\Entities\Vendedores\Schema\Get;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

readonly final class GetResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $id
     * @param ?float $descontoLimite
     * @param Id $loja
     * @param GetResponseDataContato $contato
     */
    public function __construct(
        public ?int $id,
        public ?float $descontoLimite,
        public Id $loja,
        public GetResponseDataContato $contato,
    ) {
    }
}
