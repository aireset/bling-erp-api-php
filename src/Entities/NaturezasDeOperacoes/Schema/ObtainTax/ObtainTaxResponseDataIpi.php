<?php

namespace Aireset\BlingErpApi\Entities\NaturezasDeOperacoes\Schema\ObtainTax;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;
use Aireset\BlingErpApi\Entities\NaturezasDeOperacoes\Enum\Tributacao;

readonly final class ObtainTaxResponseDataIpi extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?Id $regraOperacao
     * @param ?Tributacao $tributacao
     * @param ?string $cst
     * @param ?float $aliquota
     * @param ?float $base
     * @param ?float $valorBaseCalculo
     * @param ?float $valorImposto
     * @param ?string $observacoes
     * @param ?string $informacoesAdicionaisFisco
     * @param ?float $valorIpiFixoUnitario
     * @param ?string $classeEnquadramentoIpi
     * @param ?int $codigoEnquadramentoIpi
     * @param ?string $codigoSelo
     * @param ?int $codigoExTipi
     */
    public function __construct(
        public ?Id $regraOperacao,
        public ?Tributacao $tributacao,
        public ?string $cst,
        public ?float $aliquota,
        public ?float $base,
        public ?float $valorBaseCalculo,
        public ?float $valorImposto,
        public ?string $observacoes,
        public ?string $informacoesAdicionaisFisco,
        public ?float $valorIpiFixoUnitario,
        public ?string $classeEnquadramentoIpi,
        public ?int $codigoEnquadramentoIpi,
        public ?string $codigoSelo,
        public ?int $codigoExTipi,
    ) {}
}
