<?php

namespace Aireset\BlingErpApi\Entities\SituacoesModulos\Schema\GetModuleTransitions;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

readonly final class GetModuleTransitionsResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     * @param ?bool $ativo
     * @param int[] $acoes
     * @param ?Id $modulo
     * @param GetModuleTransitionsResponseDataSituacao $situacaoOrigem
     * @param GetModuleTransitionsResponseDataSituacao $situacaoDestino
     */
    public function __construct(
        public int $id,
        public ?bool $ativo,
        public array $acoes,
        public ?Id $modulo,
        public GetModuleTransitionsResponseDataSituacao $situacaoOrigem,
        public GetModuleTransitionsResponseDataSituacao $situacaoDestino,
    ) {
    }
}
