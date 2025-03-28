<?php

namespace Aireset\BlingErpApi\Entities\Produtos\Enum;

/**
 * Enumerador de situação de um produto.
 */
enum Situacao: string
{
    case ATIVO = 'A';
    case INATIVO = 'I';
    case EXCLUIDO = 'E';
}
