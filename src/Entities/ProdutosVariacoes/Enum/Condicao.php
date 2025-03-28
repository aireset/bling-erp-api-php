<?php

namespace Aireset\BlingErpApi\Entities\ProdutosVariacoes\Enum;

/**
 * Enumerador de condição de um produto.
 */
enum Condicao: int
{
    case NAO_ESPECIFICADO = 0;
    case NOVO = 1;
    case USADO = 2;
}
