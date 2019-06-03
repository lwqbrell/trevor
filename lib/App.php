<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 2019/5/30
 * Time: 19:13
 */

namespace lib;

/**
 * Class App
 * @package lib
 */
class App
{

    function __construct()
    {

    }

    /**
     * 应用运行入口
     */
    static public function run()
    {
        $model='index';
        $controller='Index';
        $method='index';
        // 实例化数据库
        Factory::createDatabase();
        // 实例化smarty模板引擎
        Factory::createSmarty();

        if (isset($_SERVER['REQUEST_URI'])){
            $uri=preg_split('/\//',$_SERVER['REQUEST_URI']);
            if($_SERVER['REQUEST_URI']!='/' && count($uri)>=4){
                $model=$uri[1];
                $controller=ucfirst($uri[2]);
                $method=$uri[3];
            }
        }else{
            $model='index';
            $controller='Index';
            $method='index';
        }
        try{
            $namespace= "\\app\\".$model."\\controller\\$controller";
            $class=new $namespace();
            $class->$method();

        }catch (\Exception $e){
            print_r($e->getMessage(),$e->getCode());
        }
    }
}