<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 24/02/2018
 * Time: 13:53
 */

namespace App\Helper;


class Senha
{
    static public function gerar($senha)
    {
        return md5($senha);
    }

}