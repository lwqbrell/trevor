<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 2019/5/31
 * Time: 21:48
 */

namespace app\stratege;

/**
 * Class MaleUserStratege
 * @package app\stratege\controller
 */
class MaleUserStratege implements Userstratege
{
    public function showAd(){
        echo '机械键盘';
    }
    public function showCatagory(){
        echo '数码产品';
    }
}