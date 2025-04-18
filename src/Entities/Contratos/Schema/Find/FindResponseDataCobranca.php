<?php

namespace Aireset\BlingErpApi\Entities\Contratos\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

readonly final class FindResponseDataCobranca extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?string $dataBase
     * @param ?Id $contato
     * @param ?FindResponseDataCobrancaVencimento $vencimento
     */
    public function __construct(
        public ?string $dataBase,
        public ?Id $contato,
        public ?FindResponseDataCobrancaVencimento $vencimento,
    ) {
    }
}
