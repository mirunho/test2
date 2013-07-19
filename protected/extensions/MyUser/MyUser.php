<?php
/**
 * Yii-User module
 * 
 * @author Mikhail Mangushev <mishamx@gmail.com> 
 * @link http://yii-user.2mx.org/
 * @license http://www.opensource.org/licenses/bsd-license.php
 * @version $Id: UserModule.php 132 2011-10-30 10:45:01Z mishamx $
 */

class UserModule extends CWebModule
{

	public static function sendMail($email,$subject,$message) {
//            $adminEmail = Yii::app()->params['adminEmail'];
//	    $headers = "MIME-Version: 1.0\r\nFrom: $adminEmail\r\nReply-To: $adminEmail\r\nContent-Type: text/html; charset=utf-8";
//	    $message = wordwrap($message, 70);
//	    $message = str_replace("\n.", "\n..", $message);
            
            $message = new YiiMailMessage;
            $message->setBody($message, 'text/html');
            $message->subject = $subject;
            $message->addTo($email);
            $message->from = Yii::app()->params['adminEmail'];
            
	    return Yii::app()->mail->send($message);;
	}
	
}
