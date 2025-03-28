<?php

namespace Aireset\BlingErpApi\Entities\NaturezasDeOperacoes\Schema\ObtainTax;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;
use Aireset\BlingErpApi\Entities\NaturezasDeOperacoes\Enum\Tributacao;
use Aireset\BlingErpApi\Entities\NaturezasDeOperacoes\Enum\TipoPartilha;
use Aireset\BlingErpApi\Entities\NaturezasDeOperacoes\Enum\MotivoDesoneracaoICMS;

readonly final class ObtainTaxResponseDataIcms extends BaseResponseObject
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
     * @param ?float $porcentagemFcpDifal
     * @param ?float $valorFcpDifal
     * @param ?float $valorFcpEfetivo
     * @param ?float $porcentagemFcp
     * @param ?float $porcentagemFcpUfDestino
     * @param ?float $modalidadeBaseCalculo
     * @param ?float $valorPauta
     * @param ?float $aliquotaPresumido
     * @param ?float $porcentagemBaseCalculoUfDestino
     * @param ?float $porcentagemIcmsUfDestino
     * @param ?TipoPartilha $tipoPartilha
     * @param ?float $valorIcmsDesonerado
     * @param ?MotivoDesoneracaoICMS $motivoDesoneracaoIcms
     * @param ?float $baseDiferimento
     * @param ?float $valorBaseDiferimento
     * @param ?float $valorPresumido
     * @param ?float $aliquotaPosicao
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
        public ?float $porcentagemFcpDifal,
        public ?float $valorFcpDifal,
        public ?float $valorFcpEfetivo,
        public ?float $porcentagemFcp,
        public ?float $porcentagemFcpUfDestino,
        public ?float $modalidadeBaseCalculo,
        public ?float $valorPauta,
        public ?float $aliquotaPresumido,
        public ?float $porcentagemBaseCalculoUfDestino,
        public ?float $porcentagemIcmsUfDestino,
        public ?TipoPartilha $tipoPartilha,
        public ?float $valorIcmsDesonerado,
        public ?MotivoDesoneracaoICMS $motivoDesoneracaoIcms,
        public ?float $baseDiferimento,
        public ?float $valorBaseDiferimento,
        public ?float $valorPresumido,
        public ?float $aliquotaPosicao,
    ) {}
}
