<?php

namespace Aireset\BlingErpApi\Entities\Produtos\Schema\Find;

use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;
use Aireset\BlingErpApi\Entities\Produtos\Enum\Tipo;
use Aireset\BlingErpApi\Entities\Produtos\Enum\Situacao;
use Aireset\BlingErpApi\Entities\Produtos\Enum\Formato;
use Aireset\BlingErpApi\Entities\Produtos\Enum\TipoProducao;
use Aireset\BlingErpApi\Entities\Produtos\Enum\Condicao;
use Aireset\BlingErpApi\Entities\Produtos\Enum\ActionEstoque;

readonly final class FindResponseDataVariacoes extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $id
     * @param string $nome
     * @param ?string $codigo
     * @param ?float $preco
     * @param Tipo $tipo
     * @param Situacao $situacao
     * @param Formato $formato
     * @param ?string $descricaoCurta
     * @param ?string $imagemURL
     * @param ?string $dataValidade
     * @param ?string $unidade
     * @param ?float $pesoLiquido
     * @param ?float $pesoBruto
     * @param ?int $volumes
     * @param ?float $itensPorCaixa
     * @param ?string $gtin
     * @param ?string $gtinEmbalagem
     * @param ?TipoProducao $tipoProducao
     * @param ?Condicao $condicao
     * @param ?bool $freteGratis
     * @param ?string $marca
     * @param ?string $descricaoComplementar
     * @param ?string $linkExterno
     * @param ?string $observacoes
     * @param ?string $descricaoEmbalagemDiscreta
     * @param ?Id $categoria
     * @param ?FindResponseDataEstoque $estoque
     * @param ?FindResponseDataFornecedor $fornecedor
     * @param ?ActionEstoque $actionEstoque
     * @param ?FindResponseDataDimensoes $dimensoes
     * @param ?FindResponseDataTributacao $tributacao
     * @param ?FindResponseDataMidia $midia
     * @param ?Id $linhaProduto
     * @param ?FindResponseDataEstrutura $estrutura
     * @param ?FindResponseDataCamposCustomizados[] $camposCustomizados
     * @param ?FindResponseDataVariacoesVariacao $variacao
     */
    public function __construct(
        public ?int $id,
        public string $nome,
        public ?string $codigo,
        public ?float $preco,
        public Tipo $tipo,
        public Situacao $situacao,
        public Formato $formato,
        public ?string $descricaoCurta,
        public ?string $imagemURL,
        public ?string $dataValidade,
        public ?string $unidade,
        public ?float $pesoLiquido,
        public ?float $pesoBruto,
        public ?int $volumes,
        public ?float $itensPorCaixa,
        public ?string $gtin,
        public ?string $gtinEmbalagem,
        public ?TipoProducao $tipoProducao,
        public ?Condicao $condicao,
        public ?bool $freteGratis,
        public ?string $marca,
        public ?string $descricaoComplementar,
        public ?string $linkExterno,
        public ?string $observacoes,
        public ?string $descricaoEmbalagemDiscreta,
        public ?Id $categoria,
        public ?FindResponseDataEstoque $estoque,
        public ?FindResponseDataFornecedor $fornecedor,
        public ?ActionEstoque $actionEstoque,
        public ?FindResponseDataDimensoes $dimensoes,
        public ?FindResponseDataTributacao $tributacao,
        public ?FindResponseDataMidia $midia,
        public ?Id $linhaProduto,
        public ?FindResponseDataEstrutura $estrutura,
        public ?array $camposCustomizados,
        public ?FindResponseDataVariacoesVariacao $variacao,
    ) {}

    /**
     * @inheritDoc
     */
    protected static function fromRules(): array
    {
        return [
            'camposCustomizados' => FindResponseDataCamposCustomizados::class,
        ];
    }
}
