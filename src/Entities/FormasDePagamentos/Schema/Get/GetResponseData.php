<?php

namespace Aireset\BlingErpApi\Entities\FormasDePagamentos\Schema\Get;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\FormasDePagamentos\Enum\Finalidade;
use Aireset\BlingErpApi\Entities\FormasDePagamentos\Enum\Situacao;
use Aireset\BlingErpApi\Entities\FormasDePagamentos\Enum\TipoPagamento;
use Aireset\BlingErpApi\Entities\FormasDePagamentos\Enum\Padrao;

readonly final class GetResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $id
     * @param string $descricao
     * @param TipoPagamento $tipoPagamento
     * @param ?Situacao $situacao
     * @param ?bool $fixa
     * @param ?Padrao $padrao
     * @param Finalidade $finalidade
     */
    public function __construct(
        public ?int $id,
        public string $descricao,
        public TipoPagamento $tipoPagamento,
        public ?Situacao $situacao,
        public ?bool $fixa,
        public ?Padrao $padrao,
        public Finalidade $finalidade
    ) {}
}
