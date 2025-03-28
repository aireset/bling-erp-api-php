<?php

namespace Aireset\BlingErpApi\Entities\ContasPagar\Schema\Find;

use Aireset\BlingErpApi\Entities\ContasPagar\Enum\Situacao;
use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;
use Aireset\BlingErpApi\Entities\ContasPagar\Schema\Shared\ContasPagarOcorrenciaUnicaDTO as Unica;
use Aireset\BlingErpApi\Entities\ContasPagar\Schema\Shared\ContasPagarOcorrenciaParceladaDTO as Parcelada;
use Aireset\BlingErpApi\Entities\ContasPagar\Schema\Shared\ContasPagarOcorrenciaDTO as Normal;
use Aireset\BlingErpApi\Entities\ContasPagar\Schema\Shared\ContasPagarOcorrenciaSemanalDTO as Semanal;

readonly final class FindResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $id
     * @param Situacao $situacao
     * @param string $vencimento
     * @param float $valor
     * @param Id $contato
     * @param ?Id $formaPagamento
     * @param ?float $saldo
     * @param ?string $dataEmissao
     * @param string $vencimentoOriginal
     * @param ?string $numeroDocumento
     * @param ?string $competencia
     * @param ?string $historico
     * @param string $numeroBanco
     * @param ?Id $portador
     * @param ?Id $categoria
     * @param int[] $borderos
     * @param Unica|Parcelada|Normal|Semanal|null $ocorrencia
     */
    public function __construct(
        public ?int $id,
        public Situacao $situacao,
        public string $vencimento,
        public float $valor,
        public Id $contato,
        public ?Id $formaPagamento,
        public ?float $saldo,
        public ?string $dataEmissao,
        public string $vencimentoOriginal,
        public ?string $numeroDocumento,
        public ?string $competencia,
        public ?string $historico,
        public string $numeroBanco,
        public ?Id $portador,
        public ?Id $categoria,
        public array $borderos,
        public Unica|Parcelada|Normal|Semanal|null $ocorrencia,
    ) {}
}
