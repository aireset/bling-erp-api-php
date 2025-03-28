<?php

namespace Aireset\BlingErpApi\Entities\Depositos\Schema\Find;

use Aireset\BlingErpApi\Entities\Depositos\Enum\Situacao;
use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class FindResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $id
     * @param string $descricao
     * @param Situacao $situacao
     * @param bool $padrao
     * @param bool $desconsiderarSaldo
     */
    public function __construct(
        public ?int $id,
        public string $descricao,
        public Situacao $situacao,
        public bool $padrao,
        public bool $desconsiderarSaldo,
    ) {
    }
}
