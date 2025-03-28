<?php

namespace Aireset\BlingErpApi\Entities\Nfes\Schema\Get;

use Aireset\BlingErpApi\Entities\Shared\DTO\Request\QueryParams;
use Aireset\BlingErpApi\Entities\Nfes\Enum\Situacao;
use Aireset\BlingErpApi\Entities\Nfes\Enum\Tipo;

/**
 * Parâmetros da busca de notas fiscais paginadas.
 */
readonly final class GetParams extends QueryParams
{
    public ?int $situacao;
    public ?int $tipo;
    public ?string $dataEmissaoInicial;
    public ?string $dataEmissaoFinal;

    /**
     * Constrói o objeto.
     *
     * @param ?int $pagina
     * @param ?int $limite
     * @param ?string $numeroLoja
     * @param Situacao|int|null $situacao
     * @param Tipo|int|null $tipo
     * @param \DateTimeInterface|string|null $dataEmissaoInicial
     * @param \DateTimeInterface|string|null $dataEmissaoFinal
     */
    public function __construct(
        public ?int $pagina = null,
        public ?int $limite = null,
        public ?string $numeroLoja = null,
        Situacao|string|null $situacao = null,
        Tipo|string|null $tipo = null,
        \DateTimeInterface|string|null $dataEmissaoInicial = null,
        \DateTimeInterface|string|null $dataEmissaoFinal = null,
    ) {
        $this->situacao = $situacao instanceof Situacao ? $situacao->value : $situacao;
        $this->tipo = $tipo instanceof Tipo ? $tipo->value : $tipo;

        $this->dataEmissaoInicial = $this->prepareStringOrDateParam($dataEmissaoInicial);
        $this->dataEmissaoFinal = $this->prepareStringOrDateParam($dataEmissaoFinal);

        parent::__construct(objectToArray($this));
    }
}
