<?php

namespace Aireset\BlingErpApi\Entities\Logisticas\Enum;

/**
 * Enumerador de situação de uma logística.
 */
enum Situacao: string
{
    case HABILITADO = "H";
    case DESABILITADO = "D";
}