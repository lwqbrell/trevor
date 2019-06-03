<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 2019/5/31
 * Time: 22:38
 */

namespace app\stratege\controller;

/**
 * Class Shopping
 * @package app\stratege\controller
 */
class Shopping
{
    protected $stratege;
    public function shop(){
        $this->stratege->showCatagory();
        $this->stratege->showAd();
    }
    public function setStratege(\app\stratege\controller\Userstratege $stratege){
        $this->stratege=$stratege;
    }
}