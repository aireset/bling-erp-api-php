<?php

namespace Aireset\BlingErpApi\Entities\Produtos\Enum;

/**
 * Enumerador de tipo de armamento de um produto.
 */
enum TipoArmamento: int
{
    case USO_PERMITIDO = 0;
    case USO_RESTRITO = 1;
}
