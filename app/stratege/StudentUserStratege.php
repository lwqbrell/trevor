<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 2019/5/31
 * Time: 23:13
 */

namespace app\stratege;

/**
 * Class StudentUserStratege
 * @package app\stratege\controller
 */
class StudentUserStratege implements Userstratege
{
    public function showAd(){
        echo '五年高考';
    }
    public function showCatagory(){
        echo '高考资料';
    }
}