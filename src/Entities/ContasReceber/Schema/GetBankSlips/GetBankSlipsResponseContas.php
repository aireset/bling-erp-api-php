<?php

namespace Aireset\BlingErpApi\Entities\ContasReceber\Schema\GetBankSlips;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\ContasReceber\Enum\BankSlipSituacao;

readonly final class GetBankSlipsResponseContas extends BaseResponseObject
{

    /**
     * Constrói o objeto.
     *
     * @param ?int $id
     * @param ?string $numeroExterno
     * @param ?string $vencimento
     * @param ?float $valor
     * @param ?BankSlipSituacao $situacao
     */
    public function __construct(
        public ?int $id,
        public ?string $numeroExterno,
        public ?string $vencimento,
        public ?float $valor,
        public ?BankSlipSituacao $situacao,
    ) {}
}
