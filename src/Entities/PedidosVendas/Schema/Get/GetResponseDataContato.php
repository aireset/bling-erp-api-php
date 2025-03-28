<?php

namespace Aireset\BlingErpApi\Entities\PedidosVendas\Schema\Get;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\PedidosVendas\Enum\TipoPessoa;

readonly final class GetResponseDataContato extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     * @param string $nome
     * @param ?TipoPessoa $tipoPessoa
     * @param ?string $numeroDocumento
     */
    public function __construct(
        public int $id,
        public string $nome,
        public ?TipoPessoa $tipoPessoa,
        public ?string $numeroDocumento,
    ) {
    }
}
