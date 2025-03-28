<?php

namespace Aireset\BlingErpApi\Entities\ContasReceber\Schema\GetBankSlips;

use Aireset\BlingErpApi\Entities\Shared\DTO\Request\QueryParams;
use Aireset\BlingErpApi\Entities\ContasReceber\Enum\BankSlipSituacao;

/**
 * Parâmetros da busca de boletos vinculados a um idOrigem, o qual corresponde ao ID de uma venda ou nota fiscal.
 */
readonly final class GetBankSlipsParams extends QueryParams
{
    /** @property int[]|null $situations */
    public ?array $situations;

    /**
     * Constrói o objeto.
     *
     * @param BankSlipSituacao[]|int[]|null $situations
     */
    public function __construct(
        ?array $situations = null,
    ) {
        $this->situations = array_map(
            fn(BankSlipSituacao|int|null $situacao) => $situacao instanceof BankSlipSituacao
                ? $situacao->value
                : $situacao,
            $situations
        );

        parent::__construct(objectToArray($this));
    }
}
