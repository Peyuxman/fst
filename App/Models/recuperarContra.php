<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Vendor/PHPMailer/Exception.php';
require 'Vendor/PHPMailer/PHPMailer.php';
require 'Vendor/PHPMailer/SMTP.php';

    class GenerarClave{
        public static function enviarNuevaClave($documento,$correo){

            $f = null;

            $objconexion = new Conexion();
            $conexion = $objconexion->getconexion();

            $verificar = 'SELECT * FROM fst_usuarios WHERE fst_doc= :documento AND fst_correo=:correo;';
            $result = $conexion->prepare($verificar);
            $result->bindParam(':documento',$documento);
            $result->bindParam(':correo',$correo);
            $result->execute();
            $f=$result->fetch();
            if($f){
                //Generamos una nueva clave a partir de un random
                $caracteres = '0123456789abcdefghijklmnopqertuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $longitud = 8;
                $passpass = substr(str_shuffle($caracteres),0,$longitud);
                $emailFor = $f['fst_correo'];
                $claveMD = md5($passpass);
                $PK = $f['fst_idu'];
                $actualizarClave = 'UPDATE fst_usuarios SET fst_contra=:claveMD WHERE fst_idu=:PK';
                $result = $conexion->prepare($actualizarClave);
                $result->bindParam(':PK',$PK);
                $result->bindParam(':claveMD',$claveMD);
                $result->execute();
                $mail = new PHPMailer(true);
                    try {
                        //Server settings
                        $mail->SMTPDebug = 0;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
                        $mail->Username = 'soportescarface@gmail.com';                     //SMTP username
                        $mail->Password = 'fwiuhjbgocqspqkq';                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                        //Recipients
                        $mail->setFrom("soportescarface@gmail.com", "Soporte scarface");

                        //receptooooooooooooooooooooooooooooorrrrr

                        $mail->addAddress($emailFor);     //Add a recipient
                        // $mail->addAddress('ellen@example.com');               //Name is optional
                        // $mail->addReplyTo('info@example.com', 'Information');
                        // $mail->addCC('cc@example.com');
                        // $mail->addBCC('bcc@example.com');

                        //Attachments
                        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                        //Content
                        $mail->Subject = 'Contraseña Temporal Synchronize';
                        $mail->Body ='
                        <!DOCTYPE html>
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Contraseña provisional</title>
    <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]-->
    <style>
    /* Estilos globales */
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #fafafa;
        border: 3px, #000;
    }
    </style>
</head>
<body>
    <!--[if mso]>
    <table cellspacing="0" cellpadding="0" border="0" width="600" style="margin: auto;">
    <tr>
    <td>
    <![endif]-->
    <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="margin: auto;">
        <tr>
            <td class="esd-email-paddings" valign="top" style="padding: 20px;">
                <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600" style="padding: 20px;">
                    <tr>
                        <td class="esd-structure es-p20t es-p20r es-p20l" align="center" style="padding: 20px;">
                            <table cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td align="center" valign="top" style="padding-top: 20px; padding-bottom: 20px;">
                                        <a href="#" style="text-decoration: none;"><img src="https://i.ibb.co/CKsRJ1y/logo-sena-verde-complementario-png-2022.png" alt="Logo" style="display: block; width: 155px;"></a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="esd-structure es-p20r es-p20l" align="center" style="padding: 20px;">
                            <h1 style="color: #00324d; margin: 0;">Contraseña provisional</h1>
                        </td>
                    </tr>
                    <tr>
                        <td class="esd-structure es-p20r es-p20l" align="center" style="padding: 20px;">
                            <img src="https://i.ibb.co/JKc1MxD/coworking-open-lock.png" alt="Icono" style="display: block; width: 50px;">
                        </td>
                    </tr>
                    <tr>
                        <td class="esd-structure es-p20r es-p20l" align="center" style="padding: 20px;">
                            <p style="color: #385c57; margin: 0;">Esta contraseña es provisional, por favor recuerda cambiarla al iniciar sesión.</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="esd-structure es-p30r es-p30l" align="center" style="padding: 20px;">
                            <h1 style="color: #39a900; margin: 0;">'.$passpass.'</h1>
                        </td>
                    </tr>
                    <tr>
                        <td class="esd-structure es-p20r es-p20l" align="center" style="padding: 20px;">
                            <a href="http://10.175.144.39:8081/synchronize/login" style="background: #39a900; color: #ffffff; text-decoration: none; padding: 15px 30px; border-radius: 5px;">Iniciar Sesión</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--[if mso]>
    </td>
    </tr>
    </table>
    <![endif]-->
</body>
</html>' ;
                        $mail->IsHTML(true);
                        $mail->CharSet = 'UTF-8';
                        $mail->send();
                        return $f;
                    } catch (PDOException $e) {
                      return false;
                    }
                                }
                                else{
                                    return false;
                                }
                                
                        }
                    }
//Create an instance; passing `true` enables exceptions

?>