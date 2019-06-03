<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 2019/5/30
 * Time: 23:54
 */

namespace app\index\controller;
use \PHPQRCode\QRcode;

class QrImage
{
    function getQrImage(){
        QRcode::png("西洋汇跨境电商", "./testQrcode.png", 'L', 4, 2);
        echo "<img src='/testQrcode.png'>";
    }
}