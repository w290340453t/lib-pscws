<?php
namespace Phpbe\Lib\Pscws;

/**
 *  PSCWS 中文分词库 工厂方法
 *
 * @package Phpbe\Lib\Pscws
 * @author liu12 <i@liu12.com>
 */
class Factory
{
    private static $instance = null;
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Pscws();
        }
        return self::$instance;
    }
}
