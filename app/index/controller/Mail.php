<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 2019/5/30
 * Time: 23:38
 */

namespace app\index\controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mail
{
    public function sendMail(){
        $mail = new PHPMailer(true);
        try {
            // 服务器配置
            // 设定邮件编码
            $mail->CharSet ="UTF-8";
            // 调试模式输出
            $mail->SMTPDebug = 0;
            // 使用SMTP
            $mail->isSMTP();
            // SMTP服务器
            $mail->Host = 'smtp.163.com';
            // 允许 SMTP 认证
            $mail->SMTPAuth = true;
            // SMTP 用户名  即邮箱的用户名
            $mail->Username = 'lwqbrell@163.com';
            // SMTP 密码  部分邮箱是授权码(例如163邮箱)
            $mail->Password = 'lwqbrell666';
            // 允许 TLS 或者ssl协议
            $mail->SMTPSecure = 'ssl';
            // 服务器端口 25 或者465 具体要看邮箱服务器支持
            $mail->Port = 465;
            //发件人
            $mail->setFrom('lwqbrell@163.com', 'Mailer');
            // 收件人
            $mail->addAddress('lwqbrell@qq.com', 'Joe');
            //回复的时候回复给哪个邮箱 建议和发件人一致
            $mail->addReplyTo('lwqbrell@163.com', 'info');

            // Content
            // 是否以HTML文档格式发送  发送后客户端可直接显示对应HTML内容
            $mail->isHTML(true);
            $mail->Subject = '这里是邮件标题' . time();
            $mail->Body    = '<h1>这里是邮件内容</h1>' . date('Y-m-d H:i:s');
            $mail->AltBody = '如果邮件客户端不支持HTML则显示此内容';

            $mail->send();
            echo '邮件发送成功';
        } catch (Exception $e) {
            echo '邮件发送失败: ', $mail->ErrorInfo;
        }
    }
}