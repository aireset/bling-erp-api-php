<?php

namespace Aireset\BlingErpApi\Entities\LogisticasRemessas\Schema\Find;

use Aireset\BlingErpApi\Entities\LogisticasRemessas\Enum\Situacao;
use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

readonly final class FindResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param int $id
     * @param string $numeroPlp
     * @param Situacao $situacao
     * @param string $descricao
     * @param string $dataCriacao
     * @param Id $logistica
     * @param FindResponseDataObjetos[] $objetos
     */
    public function __construct(
        public int $id,
        public string $numeroPlp,
        public Situacao $situacao,
        public string $descricao,
        public string $dataCriacao,
        public Id $logistica,
        public array $objetos,
    ) {
    }

    /**
     * @inheritDoc
     */
    protected static function fromRules(): array
    {
        return [
            'objetos' => FindResponseDataObjetos::class,
        ];
    }
}
