<?php

namespace Aireset\BlingErpApi\Entities\LogisticasRemessas\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\LogisticasRemessas\Enum\SituacaoRastreamento;

readonly final class FindResponseDataObjetosRastreamento extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param string $codigo
     * @param string $descricao
     * @param SituacaoRastreamento $situacao
     * @param string $origem
     * @param string $destino
     * @param string $ultimaAlteracao
     * @param string $url
     */
    public function __construct(
        public string $codigo,
        public string $descricao,
        public SituacaoRastreamento $situacao,
        public string $origem,
        public string $destino,
        public string $ultimaAlteracao,
        public string $url,
    ) {
    }
}
