<?php

namespace Aireset\BlingErpApi\Entities\Notificacoes\Schema\Read;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;

readonly final class ReadResponseDataEnquadramentos extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?string[] $tamanhoEmpresa
     * @param ?int[] $idMunicipio
     * @param ?string[] $uf
     * @param ?int[] $crt
     */
    public function __construct(
        public ?array $tamanhoEmpresa,
        public ?array $idMunicipio,
        public ?array $uf,
        public ?array $crt,
    ) {
    }
}
