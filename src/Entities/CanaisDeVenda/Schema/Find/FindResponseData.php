<?php

namespace Aireset\BlingErpApi\Entities\CanaisDeVenda\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;
use Aireset\BlingErpApi\Entities\CanaisDeVenda\Enum\Situacao;

readonly final class FindResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $id
     * @param ?string $descricao
     * @param ?string $tipo
     * @param ?Situacao $situacao
     * @param ?FindResponseDataFiliais[] $filiais
     */
    public function __construct(
        public ?int $id,
        public ?string $descricao,
        public ?string $tipo,
        public ?Situacao $situacao,
        public ?array $filiais,
    ) {
    }

    /**
     * @inheritDoc
     */
    protected static function fromRules(): array
    {
        return [
            'filiais' => FindResponseDataFiliais::class
        ];
    }
}
