<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 23/02/2018
 * Time: 23:19
 */

namespace App\Helper;


class Data
{
    /*
     * @param mixed $data
     * @return mixed $data
     */
    static public function get($data)
    {
        if (!empty($data))
            return date("d/m/Y", strtotime($data));
        else return "";
    }

    static public function set($data)
    {
        $data = str_replace('/', '-', $data);
        return date("Y-m-d", strtotime($data));
    }
}