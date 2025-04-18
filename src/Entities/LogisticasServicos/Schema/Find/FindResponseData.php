<?php

namespace Aireset\BlingErpApi\Entities\LogisticasServicos\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

readonly final class FindResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $id
     * @param string $descricao
     * @param string $codigo
     * @param string[] $aliases
     * @param ?bool $ativo
     * @param float $freteItem
     * @param int $estimativaEntrega
     * @param ?string $idCodigoServico
     * @param Id $logistica
     * @param Id $transportador
     */
    public function __construct(
        public ?int $id,
        public string $descricao,
        public string $codigo,
        public array $aliases,
        public ?bool $ativo,
        public float $freteItem,
        public int $estimativaEntrega,
        public ?string $idCodigoServico,
        public Id $logistica,
        public Id $transportador,
    ) {
    }
}
