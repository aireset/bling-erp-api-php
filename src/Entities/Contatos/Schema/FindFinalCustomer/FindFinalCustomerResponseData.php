<?php

namespace Aireset\BlingErpApi\Entities\Contatos\Schema\FindFinalCustomer;

use Aireset\BlingErpApi\Entities\Contatos\Enum\Situacao;
use Aireset\BlingErpApi\Entities\Shared\Enum\TipoPessoa;
use Aireset\BlingErpApi\Entities\Contatos\Enum\IndicadorIe;
use Aireset\BlingErpApi\Entities\Shared\BaseResponseObject;
use Aireset\BlingErpApi\Entities\Shared\DTO\Schema\Id;

readonly final class FindFinalCustomerResponseData extends BaseResponseObject
{
    /**
     * Constrói o objeto.
     *
     * @param ?int $id
     * @param ?string $nome
     * @param ?string $codigo
     * @param ?Situacao $situacao
     * @param ?string $numeroDocumento
     * @param ?string $telefone
     * @param ?string $celular
     * @param ?string $fantasia
     * @param ?TipoPessoa $tipo
     * @param ?IndicadorIe $indicadorIe
     * @param ?string $ie
     * @param ?string $rg
     * @param ?string $orgaoEmissor
     * @param ?string $email
     * @param ?FindFinalCustomerResponseDataEndereco $endereco
     * @param ?Id $vendedor
     * @param ?FindFinalCustomerResponseDataDadosAdicionais $dadosAdicionais
     * @param ?FindFinalCustomerResponseDataFinanceiro $financeiro
     * @param ?FindFinalCustomerResponseDataPais $pais
     * @param FindFinalCustomerResponseDataTiposContato[] $tiposContato
     * @param FindFinalCustomerResponseDataPessoasContato[] $pessoasContato
     */
    public function __construct(
        public ?int $id,
        public ?string $nome,
        public ?string $codigo,
        public ?Situacao $situacao,
        public ?string $numeroDocumento,
        public ?string $telefone,
        public ?string $celular,
        public ?string $fantasia,
        public ?TipoPessoa $tipo,
        public ?IndicadorIe $indicadorIe,
        public ?string $ie,
        public ?string $rg,
        public ?string $orgaoEmissor,
        public ?string $email,
        public ?FindFinalCustomerResponseDataEndereco $endereco,
        public ?Id $vendedor,
        public ?FindFinalCustomerResponseDataDadosAdicionais $dadosAdicionais,
        public ?FindFinalCustomerResponseDataFinanceiro $financeiro,
        public ?FindFinalCustomerResponseDataPais $pais,
        public ?array $tiposContato,
        public ?array $pessoasContato,
    ) {
    }

    /**
     * @inheritDoc
     */
    protected static function fromRules(): array
    {
        return [
            'tiposContato'   => FindFinalCustomerResponseDataTiposContato::class,
            'pessoasContato' => FindFinalCustomerResponseDataPessoasContato::class,
        ];
    }
}
