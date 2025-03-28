<?php

namespace Aireset\BlingErpApi\Entities\Vendedores\Schema\Get;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Vendedores\Enum\Situacao;

readonly final class GetResponseDataContato extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     * @param string $nome
     * @param Situacao $situacao
     */
    public function __construct(
        public int $id,
        public string $nome,
        public Situacao $situacao,
    ) {
    }
}
