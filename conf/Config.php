<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 2019/5/30
 * Time: 15:00
 */

namespace conf;

class Config
{
    // 数据库配置
    const USER='root';
    const PWD='root';
    const DNS='mysql:host=localhost;dbname=xiyanhui';

    // smarty配置
    const TEMPLATEDIR='/../view';
    const COMPILEDIR='/../tmp/templates_c/';
    const CACHEDIR='/../tmp/cache/';
}