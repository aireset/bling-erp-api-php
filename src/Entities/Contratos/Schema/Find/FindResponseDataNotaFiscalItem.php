<?php

namespace Aireset\BlingErpApi\Entities\Contratos\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

readonly final class FindResponseDataNotaFiscalItem extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?string $codigoServico
     * @param ?Id $produto
     */
    public function __construct(
        public ?string $codigoServico,
        public ?Id $produto,
    ) {
    }
}
