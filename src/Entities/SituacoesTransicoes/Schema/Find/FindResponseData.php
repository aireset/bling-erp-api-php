<?php

namespace Aireset\BlingErpApi\Entities\SituacoesTransicoes\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

readonly final class FindResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     * @param ?bool $ativo
     * @param int[] $acoes
     * @param ?Id $modulo
     * @param FindResponseDataSituacao $situacaoOrigem
     * @param FindResponseDataSituacao $situacaoDestino
     */
    public function __construct(
        public int $id,
        public ?bool $ativo,
        public array $acoes,
        public ?Id $modulo,
        public FindResponseDataSituacao $situacaoOrigem,
        public FindResponseDataSituacao $situacaoDestino,
    ) {
    }
}
