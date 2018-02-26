<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 23/02/2018
 * Time: 23:07
 */

namespace App\Helper;


class Moeda
{
    /*
     * para receber o valor do Banco de Dados
     */
    static public function get($valor)
    {
        return number_format($valor,2,',','.');
    }

    static public function set($valor)
    {
        return str_replace(',', '.', str_replace('.','', $valor));
    }
}