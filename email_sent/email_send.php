


<?php

// include("PHPMailerAutoload.php");
require_once ("PHPMailer.php");
require_once ("SMTP.php");
require_once ("Exception.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
// require "PHPMailer.php
// $mail = new PHPMailer;


function email($otp,$to)
{
    
    $mail = new PHPMailer(true);

    $from = "arnabduttarightepay@gmail.com";

    $pwd = "npzutnpbpfrmxdkc";
    $body = '
    <html>
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">
        <style type="text/css">
          @media screen {
                  @font-face {
                    font-family: "Rubik";
                    font-style: normal;
                    font-weight: 400;
                    src: url(https://fonts.gstatic.com/s/rubik/v11/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-B4iFV0Uz.woff) format("woff");
                  }
                }
                /* A simple css reset */
                @media only screen and (max-width: 620px) {
                  .wrapper .section {
                    width: 100%;
                  }
                  .wrapper .column {
                    width: 100%;
                    display: block;
                  }
                }
        </style>
      </head>
      <body style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;">
        <p style="margin:0;padding:0;padding-bottom:20px;line-height:1.6;font-family:"Rubik";color:#2d4f43;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;"/>
      </p>
        <table width="100%" style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;">
          <tbody style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;">
            <tr style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;">
              <td class="wrapper" width="600" align="center" style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;padding-left:10px;padding-right:10px;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;">
                <table class="section header" cellpadding="0" cellspacing="0" width="600" style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:initial;vertical-align:top;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;">
                  <tr style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;">
                    <td class="column" style="padding:0;margin:0;border: 1px solid #c3cdc9;border-radius:8px;border-spacing:0px;border-collapse:collapse;vertical-align:top;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;">
                      <table style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;">
                        <tbody style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;">
                          <tr style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;">
                            <td align="center" style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;padding-top: 64px;">
                              <img src="https://via.placeholder.com/161x48" style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;width:100%;display:block;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;width: 161px;">
                              <h2 style="margin:0;padding:0;padding-bottom:20px;line-height:1.6;font-family:"Rubik";color:#2d4f43;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;text-align: center; padding-top: 32px; padding-bottom: 3px;">One-Time Password (OTP)</h2>
                              <table style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;margin-bottom: 48px;">
                                <tbody style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;">
                                  <tr style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;">
                                    <td style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;">
                                      <p style="margin:0;padding:0;padding-bottom:20px;line-height:1.6;font-family:"Rubik";color:#2d4f43;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;
                                        display: inline-block;
                                        border-radius: 50%;
                                        width: 18px;
                                        height: 18px;
                                        padding: 8px;
                                        background: #c3cdc9;
                                        font-size: 16px;
                                        text-align: center;
                                        line-height: 17px;">AD</p>
                                    </td>
                                    <td style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;font-family:"Rubik",
                                     "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;vertical-align: middle;">
                                      <p style="margin:0;padding:0;padding-bottom:20px;line-height:1.6;font-family:"Rubik";color:#2d4f43;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;padding: 0;">&nbsp;&nbsp;Company Name</p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;">
                            <td align="left" style="padding:0;margin:0;border:none;border-spacing:0px;border-collapse:collapse;vertical-align:top;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;border-top: 1px solid #c3cdc9; 
                              padding: 46px 54px 64px;">
                              <p style="margin:0;padding:0;padding-bottom:20px;line-height:1.6;font-family:"Rubik";color:#2d4f43;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important; font-weight: 600;text-align: left;">
                                Hello, 
                              </p>
                              <p style="margin:0;padding:0;padding-bottom:20px;line-height:1.6;font-family:"Rubik";color:#2d4f43;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;text-align: left;">
                                Enter the following OTP to finish Registration process in to RKMSCC NVSP PROJECT
                              </p>
                              <p style="margin:0;padding:0;padding-bottom:20px;line-height:1.6;font-family:"Rubik";color:#2d4f43;font-family:"Rubik",
                               "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;font-weight: 600;font-size:24px;text-align: center;">
                                '.$otp.'
                              </p>
                              <p style="margin:0;padding:0;padding-bottom:20px;line-height:1.6;font-family:"Rubik";color:#2d4f43;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;text-align: left;">
                                Your OTP is only valid within five (5) minutes. Please do not share this code with anyone.
                              </p>
                              <p style="margin:0;padding:0;padding-bottom:20px;line-height:1.6;font-family:"Rubik";color:#2d4f43;font-family:"Rubik", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;text-align: left;">
                                If you did not initiate this login, please contact your self cause you made it.
                                <br>
                              </p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  
                        </tbody>
                      </table>
                    </td>
                  </tr>
          
                
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </body>
    </html>';

    try {
        //Server settings
		    $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = "smtp.gmail.com";
        $mail->SMTPAuth   = true;
        $mail->Username   = $from;
        $mail->Password   = $pwd;
        $mail->SMTPSecure = "TLS";
        $mail->Port       = 587;
        $mail->CharSet = "UTF-8";
        $mail->SMTPOptions = ["ssl" => [
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => false,
        ]];

        //Recipients
        $mail->setFrom($from, "OTP DEBO NA TEAM");
        $mail->addAddress($to);

        //Content
        $mail->isHTML(true);
        $mail->Subject = "OTP VERIFICATION";
        $mail->Body    = $body;

        return $mail->send();
    } catch (Exception $e) {
        // echo "\nMail could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}
?>