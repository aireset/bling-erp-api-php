<?php

namespace Aireset\BlingErpApi\Entities\NaturezasDeOperacoes\Schema\Get;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\NaturezasDeOperacoes\Enum\Situacao;
use Aireset\BlingErpApi\Entities\NaturezasDeOperacoes\Enum\Padrao;

readonly final class GetResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $id
     * @param ?Situacao $situacao
     * @param ?Padrao $padrao
     * @param ?string $descricao
     */
    public function __construct(
        public ?int $id,
        public ?Situacao $situacao,
        public ?Padrao $padrao,
        public ?string $descricao,
    ) {
    }
}
