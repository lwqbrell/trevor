<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 2019/5/31
 * Time: 21:49
 */

namespace app\stratege\controller;

/**
 * Class FemaleUserStratege
 * @package app\stratege\controller
 */
class FemaleUserStratege implements Userstratege
{
    public function showAd(){
        echo 'Oly';
    }
    public function showCatagory(){
        echo '化妆品';
    }
}