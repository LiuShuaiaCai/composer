<?php
namespace Composer\Test;
include_once 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Service
{
    private $log;

    public function __construct()
    {
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('logs/'.date('Y-m-d').'.log', Logger::WARNING));
        $this->log = $log;
    }

    public function hello()
    {
        $this->log->warning('Foo');
        return 'this is composer package test!!!@all';
    }
}
