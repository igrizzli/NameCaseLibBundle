<?php
/**
 * Created by JetBrains PhpStorm.
 * User: stansmet
 * Date: 6/4/13
 * Time: 12:33 PM
 * To change this template use File | Settings | File Templates.
 */

namespace PrestoHeads\NameCaseLibBundle\Bridge;


class Inflector {

    protected $lib;

    public function __construct()
    {
//        require_once
    }

    public function convert($word)
    {
        return $this->lib->q($word);
    }
}