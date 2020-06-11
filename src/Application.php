<?php

namespace Blitz;

class Application
{
    public $v;
    public $c;
    public $a;
    public $requestParams;
    public function __construct()
    {
        self::init();
    }

    private function init()
    {
        self::parseUrl();
    }

    public function run()
    {
        print_r($this);
    }

    private function parseUrl()
    {
        list($this->v,$this->c,$this->a) = BparseUrl();
        parse_str(file_get_contents("php://input"),$this->requestParams);
    }
}