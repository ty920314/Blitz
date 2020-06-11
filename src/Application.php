<?php

namespace Blitz;

use Blitz\Request\Request;

class Application
{
    public $v;
    public $c;
    public $a;
    public $requestParams;
    /**
     * @var Request
     */
    public $request;
    public function __construct()
    {
        self::init();
    }

    private function init():void
    {
        $this->request = new Request();
        self::BparseRequest();
    }

    public function run()
    {
        print_r(get_included_files());
    }

    private function BparseRequest():void
    {
        $vca = explode(DIRECTORY_SEPARATOR, $_SERVER['REQUEST_URI']);
        $this->v = empty($vca[1]) ? 'index' : $vca[1];
        $this->c = empty($vca[2]) ? 'index' : $vca[2];
        $this->a = empty($vca[3]) ? 'index' : $vca[3];
        parse_str(file_get_contents("php://input"), $this->requestParams);
        $this->request->request_time = $_SERVER['REQUEST_TIME'];;
    }
}